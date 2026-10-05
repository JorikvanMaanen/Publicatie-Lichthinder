<x-layouts::app :title="__('Home')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <a href="{{ route('richtlijn') }}" wire:navigate class="block">
                <img
                    src="{{ asset('images/Lichthinder webpagina.png') }}"
                    alt="{{ __('Open de richtlijn') }}"
                    class="h-auto max-w-full rounded-xl"
                >
                <p class="mt-2 text-center">Lichthinder richtlijn</p>
            </a>
        </div>
    </div>
</x-layouts::app>
