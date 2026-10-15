import { getDocument, GlobalWorkerOptions } from 'pdfjs-dist';

GlobalWorkerOptions.workerSrc = new URL(
    'pdfjs-dist/build/pdf.worker.min.mjs',
    import.meta.url,
).href;

const viewer = document.querySelector('[data-pdf-viewer]');

if (viewer) {
    const pages = viewer.querySelector('[data-pdf-pages]');
    const status = viewer.querySelector('[data-pdf-status]');
    const watermark = viewer.dataset.watermark;

    for (const eventName of ['contextmenu', 'copy', 'cut', 'dragstart', 'selectstart']) {
        viewer.addEventListener(eventName, (event) => event.preventDefault());
    }

    document.addEventListener('keydown', (event) => {
        if ((event.ctrlKey || event.metaKey) && ['c', 's', 'p', 'a'].includes(event.key.toLowerCase())) {
            event.preventDefault();
        }
    });

    getDocument({ url: viewer.dataset.pdfUrl }).promise
        .then(async (pdf) => {
            for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                const page = await pdf.getPage(pageNumber);
                const textContent = await page.getTextContent();
                const baseViewport = page.getViewport({ scale: 1 });
                const scale = Math.min(1.5, (pages.clientWidth - 32) / baseViewport.width);
                const viewport = page.getViewport({ scale });
                const pixelRatio = Math.min(window.devicePixelRatio || 1, 2);
                const pageElement = document.createElement('article');
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                const watermarkElement = document.createElement('div');

                pageElement.className = 'pdf-page';
                canvas.width = Math.floor(viewport.width * pixelRatio);
                canvas.height = Math.floor(viewport.height * pixelRatio);
                canvas.style.width = `${viewport.width}px`;
                canvas.style.maxWidth = '100%';
                context.scale(pixelRatio, pixelRatio);
                context.fillStyle = '#18181b';
                watermarkElement.className = 'pdf-watermark';

                for (const item of textContent.items) {
                    if (!('str' in item) || !item.str.trim()) {
                        continue;
                    }

                    const [x, y] = viewport.convertToViewportPoint(item.transform[4], item.transform[5]);
                    const fontSize = Math.hypot(item.transform[0], item.transform[1]) * scale;
                    const fontFamily = textContent.styles[item.fontName]?.fontFamily ?? 'sans-serif';

                    context.font = `${fontSize}px ${fontFamily}`;
                    context.fillText(item.str, x, y);
                }

                for (let index = 0; index < 18; index++) {
                    const label = document.createElement('span');
                    label.textContent = watermark;
                    watermarkElement.append(label);
                }

                pageElement.append(canvas, watermarkElement);
                pages.append(pageElement);
            }

            status.remove();
        })
        .catch((error) => {
            console.error('The guideline PDF could not be rendered.', error);
            status.textContent = 'Het document kon niet worden geladen. Probeer de pagina opnieuw te laden.';
            status.classList.add('text-red-600', 'dark:text-red-400');
        });
}
