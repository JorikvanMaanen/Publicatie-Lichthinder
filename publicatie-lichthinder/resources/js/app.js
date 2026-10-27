const addWatermarkToCanvas = (canvas, name, timeString) => {
    const context = canvas.getContext('2d');

    if (!context) {
        return;
    }

    const text = `${name} · ${timeString}`;
    const fontSize = Math.max(12, canvas.width / 60);

    context.save();
    context.font = `700 ${fontSize}px sans-serif`;
    context.textAlign = 'center';
    context.textBaseline = 'middle';
    context.globalAlpha = 0.24;

    context.lineWidth = Math.max(2, fontSize * 0.12);
    context.lineJoin = 'round';
    context.strokeStyle = '#fff';
    context.fillStyle = '#333';

    const stepX = context.measureText(text).width + fontSize * 5;
    const stepY = fontSize * 9;
    const patternWidth = canvas.width + canvas.height;
    const patternHeight = canvas.width + canvas.height;

    context.translate(canvas.width / 2, canvas.height / 2);
    context.rotate(-Math.PI / 6);

    for (let y = -patternHeight; y < patternHeight; y += stepY) {
        for (let x = -patternWidth; x < patternWidth; x += stepX) {
            context.save();
            context.translate(x, y);
            context.strokeText(text, 0, 0);
            context.fillText(text, 0, 0);
            context.restore();
        }
    }

    context.restore();
};

const initializeGuidelinePdf = async () => {
    const viewer = document.querySelector('[data-guideline-pdf]');

    if (!viewer || viewer.dataset.initialized) {
        return;
    }

    viewer.dataset.initialized = 'true';

    try {
        const [pdfjs, worker] = await Promise.all([
            import('pdfjs-dist'),
            import('pdfjs-dist/build/pdf.worker.min.mjs?url'),
        ]);

        pdfjs.GlobalWorkerOptions.workerSrc = worker.default;

        const pdfUrl = viewer.dataset.pdfUrl;

        if (!pdfUrl) {
            throw new Error('The guideline PDF URL is missing.');
        }

        const pdf = await pdfjs.getDocument({ url: pdfUrl }).promise;
        const errorMessage = viewer.querySelector('[data-pdf-error]');
        const fragment = document.createDocumentFragment();
        const pages = [];
        const watermarkDateTime = new Intl.DateTimeFormat('nl-NL', {
            dateStyle: 'short',
            timeStyle: 'medium',
        }).format(new Date());

        for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
            const pageContainer = document.createElement('div');
            const canvas = document.createElement('canvas');

            pageContainer.id = `richtlijn-page-${pageNumber}`;
            pageContainer.className = 'relative mx-auto mb-4 flex w-fit max-w-[calc(100%-2rem)] justify-center overflow-hidden bg-white shadow-sm';
            canvas.className = 'block h-auto max-w-full';
            pageContainer.append(canvas);
            fragment.append(pageContainer);
            pages.push({ pageNumber, canvas });
        }

        viewer.insertBefore(fragment, errorMessage);

        for (const { pageNumber, canvas } of pages) {
            const page = await pdf.getPage(pageNumber);
            const baseViewport = page.getViewport({ scale: 1 });
            const maxWidth = Math.min(viewer.clientWidth - 32, 1000);
            const scale = maxWidth / baseViewport.width;
            const outputScale = window.devicePixelRatio || 1;
            const viewport = page.getViewport({ scale: scale * outputScale });
            const context = canvas.getContext('2d');

            canvas.width = Math.floor(viewport.width);
            canvas.height = Math.floor(viewport.height);
            canvas.style.width = `${Math.floor(baseViewport.width * scale)}px`;
            canvas.style.height = `${Math.floor(baseViewport.height * scale)}px`;

            await page.render({
                canvas,
                canvasContext: context,
                viewport,
                background: 'rgb(255, 255, 255)',
            }).promise;

            addWatermarkToCanvas(canvas, viewer.dataset.watermarkName || 'Gebruiker', watermarkDateTime);
        }

        const requestedPage = location.hash
            ? document.getElementById(decodeURIComponent(location.hash.slice(1)))
            : null;

        if (requestedPage && viewer.contains(requestedPage)) {
            viewer.scrollTop = requestedPage.offsetTop;
        }
    } catch (error) {
        console.error('Failed to load the guideline PDF.', error);
        delete viewer.dataset.initialized;
        viewer.querySelector('[data-pdf-error]').classList.remove('hidden');
    }
};

document.addEventListener('click', (event) => {
    const link = event.target instanceof Element
        ? event.target.closest('[data-pdf-page]')
        : null;

    if (!link) {
        return;
    }

    const viewer = document.querySelector('[data-guideline-pdf]');
    const page = document.getElementById(`richtlijn-page-${link.dataset.pdfPage}`);

    if (!viewer || !page || !viewer.contains(page)) {
        return;
    }

    event.preventDefault();
    history.replaceState(null, '', link.getAttribute('href'));
    viewer.scrollTo({ top: page.offsetTop, behavior: 'smooth' });
});

document.addEventListener('DOMContentLoaded', initializeGuidelinePdf);
document.addEventListener('livewire:navigated', initializeGuidelinePdf);