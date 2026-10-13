<x-layouts::app :title="__('Richtlijn')">
    <div
        data-pdf-viewer
        data-pdf-url="{{ asset('pdf/richtlijn.pdf') }}"
        class="flex h-[calc(100dvh-5rem)] min-h-[32rem] w-full overflow-hidden rounded-xl border border-zinc-200 bg-zinc-100 dark:border-zinc-700 dark:bg-zinc-900"
    >
        <aside class="flex w-36 shrink-0 flex-col border-e border-zinc-200 bg-white dark:border-zinc-700 dark:bg-zinc-800 sm:w-56">
            <div class="border-b border-zinc-200 p-4 dark:border-zinc-700">
                <h2 class="font-semibold">{{ __('Richtlijn') }}</h2>
                <p data-pdf-page-count class="mt-1 text-sm text-zinc-500 dark:text-zinc-400" aria-live="polite">
                    {{ __('Pagina’s laden...') }}
                </p>
            </div>

            <nav
                data-pdf-navigation
                aria-label="{{ __('PDF-pagina’s') }}"
                class="flex-1 space-y-1 overflow-y-auto p-2"
            ></nav>
        </aside>

        <main data-pdf-pages class="min-w-0 flex-1 overflow-y-auto p-4 sm:p-8" aria-label="{{ __('Richtlijnpagina’s') }}">
            <p data-pdf-status class="mx-auto max-w-xl rounded-lg bg-white p-6 text-center text-sm text-zinc-600 shadow dark:bg-zinc-800 dark:text-zinc-300" role="status">
                {{ __('De PDF wordt geladen...') }}
            </p>
        </main>
    </div>
</x-layouts::app>
