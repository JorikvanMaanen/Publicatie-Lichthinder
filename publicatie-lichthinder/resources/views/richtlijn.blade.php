<x-layouts::app :title="__('Richtlijn')">
    <section class="flex h-full min-h-0 w-full flex-row">
        <h1 class="sr-only">{{ __('Lichthinder richtlijn') }}</h1>

        <aside class="h-full w-56 shrink-0 overflow-y-auto border-r border-zinc-300 bg-zinc-50 p-3 dark:border-zinc-700 dark:bg-zinc-900 sm:w-64 lg:w-72">
            <h2 class="mb-2 text-sm font-semibold">{{ __('Inhoud') }}</h2>
            <nav aria-label="{{ __('Navigatie door de richtlijn') }}" class="flex flex-col gap-1">
                @foreach (range(1, 3) as $page)
                    <a
                        href="{{ route('richtlijn.pdf') }}#page={{ $page }}&amp;toolbar=0&amp;navpanes=0"
                        target="richtlijn-pdf"
                        data-pdf-page="{{ $page }}"
                        class="w-full rounded-md px-3 py-2 text-left text-sm text-zinc-700 hover:bg-zinc-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent dark:text-zinc-200 dark:hover:bg-zinc-800"
                    >
                        {{ __('Pagina :page', ['page' => $page]) }}
                    </a>
                @endforeach
            </nav>
        </aside>

        <div class="relative min-h-0 w-full flex-1 overflow-hidden bg-zinc-200">
            <iframe
                src="{{ route('richtlijn.pdf') }}#toolbar=0&navpanes=0"
                title="{{ __('Lichthinder richtlijn') }}"
                id="richtlijn-pdf"
                name="richtlijn-pdf"
                data-pdf-url="{{ route('richtlijn.pdf') }}"
                class="absolute inset-0 size-full border-0"
            ></iframe>

            <div
                aria-hidden="true"
                class="pointer-events-none absolute inset-0 z-10 flex select-none flex-col items-center justify-center gap-8 overflow-hidden"
            >
                @foreach (range(1, 5) as $watermark)
                    <span
                        class="whitespace-nowrap"
                        style="font-size: clamp(2.5rem, 6vw, 5.5rem); opacity: 0.3; font-weight: 700; font-style: normal; color: rgba(82, 82, 82, 0.82); transform: rotate(-25deg);"
                    >
                        {{ auth()->user()->name }}
                    </span>
                @endforeach
            </div>

            
        </div>
    </section>
</x-layouts::app>
