const initializedViewers = new WeakSet();

async function initializePdfViewer(viewer) {
    if (initializedViewers.has(viewer)) {
        return;
    }

    initializedViewers.add(viewer);

    const navigation = viewer.querySelector('[data-pdf-navigation]');
    const pagesContainer = viewer.querySelector('[data-pdf-pages]');
    const pageCountLabel = viewer.querySelector('[data-pdf-page-count]');
    const status = viewer.querySelector('[data-pdf-status]');
    const pdfUrl = viewer.dataset.pdfUrl;

    try {
        const [{ getDocument, GlobalWorkerOptions }, worker] = await Promise.all([
            import('pdfjs-dist'),
            import('pdfjs-dist/build/pdf.worker.min.mjs?url'),
        ]);

        GlobalWorkerOptions.workerSrc = worker.default;

        const pdf = await getDocument(pdfUrl).promise;
        const iframe = document.createElement('iframe');

        pageCountLabel.textContent = `${pdf.numPages} pagina’s`;
        iframe.name = 'richtlijn-pdf';
        iframe.title = 'Lichthinder richtlijn';
        iframe.src = `${pdfUrl}#page=1`;
        iframe.className = 'h-full w-full rounded bg-white';
        pagesContainer.replaceChildren(iframe);

        for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber += 1) {
            const link = document.createElement('a');
            link.href = `${pdfUrl}#page=${pageNumber}`;
            link.target = iframe.name;
            link.textContent = `Pagina ${pageNumber}`;
            link.className = 'block rounded-md px-3 py-2 text-sm text-zinc-700 hover:bg-zinc-100 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 dark:text-zinc-200 dark:hover:bg-zinc-700';
            link.addEventListener('click', () => {
                navigation.querySelectorAll('a').forEach((item) => {
                    item.classList.toggle('bg-zinc-100', item === link);
                    item.classList.toggle('font-semibold', item === link);
                    item.classList.toggle('dark:bg-zinc-700', item === link);

                    if (item === link) {
                        item.setAttribute('aria-current', 'page');
                    } else {
                        item.removeAttribute('aria-current');
                    }
                });
            });
            navigation.append(link);
        }

        navigation.firstElementChild?.setAttribute('aria-current', 'page');
        navigation.firstElementChild?.classList.add('bg-zinc-100', 'font-semibold', 'dark:bg-zinc-700');
        status?.remove();
    } catch (error) {
        console.error('De richtlijn-PDF kon niet worden geladen.', error);
        pageCountLabel.textContent = 'PDF niet beschikbaar';
        status.textContent = 'Plaats de richtlijn als public/pdf/richtlijn.pdf om de pagina’s hier te bekijken.';
    }
}

function initializePdfViewers() {
    document.querySelectorAll('[data-pdf-viewer]').forEach((viewer) => {
        void initializePdfViewer(viewer);
    });
}

document.addEventListener('DOMContentLoaded', initializePdfViewers);
document.addEventListener('livewire:navigated', initializePdfViewers);