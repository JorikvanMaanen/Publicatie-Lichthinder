<x-layouts::app :title="__('Richtlijn')">
    <section class="flex h-full min-h-0 w-full flex-row">
        <h1 class="sr-only">{{ __('Lichthinder richtlijn') }}</h1>

        <aside class="h-full w-56 shrink-0 overflow-y-auto border-r border-zinc-300 bg-zinc-50 p-3 sm:w-64 lg:w-72">
            <h2 class="mb-2 text-sm font-semibold">{{ __('Inhoud') }}</h2>
            <nav aria-label="{{ __('Navigatie door de richtlijn') }}" class="flex flex-col gap-1">
                @foreach (range(1, 3) as $page)
                    <a
                        href="#richtlijn-page-{{ $page }}"
                        data-pdf-page="{{ $page }}"
                        class="w-full rounded-md px-3 py-2 text-left text-sm text-zinc-700 hover:bg-zinc-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent"
                    >
                        {{ __('Pagina :page', ['page' => $page]) }}
                    </a>
                @endforeach
            </nav>
        </aside>

        <div class="relative min-h-0 w-full flex-1 overflow-hidden bg-white">
            <div
                id="richtlijn-pdf"
                data-guideline-pdf
                data-pdf-url="{{ route('richtlijn.pdf') }}"
                data-watermark-name="{{ auth()->user()->name }}"
                class="absolute inset-0 overflow-y-auto bg-white scroll-smooth"
                aria-label="{{ __('Lichthinder richtlijn') }}"
            >
                <p data-pdf-error role="alert" class="hidden p-6 text-center text-red-700">
                    {{ __('De richtlijn kon niet worden geladen.') }}
                </p>
            </div>

        </div>
    </section>
</x-layouts::app>
