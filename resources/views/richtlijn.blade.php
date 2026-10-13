<x-layouts::app :title="__('Richtlijn')" main-class="!min-h-0 !min-w-0 !p-0">
    <section
        data-pdf-viewer
        data-pdf-url="{{ route('richtlijn.document') }}"
        data-watermark="{{ auth()->user()->name }}"
        aria-label="{{ __('Lichthinder richtlijn') }}"
        class="pdf-reader h-[calc(100dvh-4rem)] w-full overflow-y-auto bg-zinc-100 dark:bg-zinc-900 lg:h-dvh"
    >
        <p data-pdf-status role="status" class="p-6 text-center text-sm text-zinc-600 dark:text-zinc-300">
            {{ __('Document laden...') }}
        </p>
        <div data-pdf-pages class="mx-auto grid w-full max-w-5xl gap-6 p-4 sm:p-6"></div>
    </section>

    @vite('resources/js/richtlijn.js')
</x-layouts::app>
