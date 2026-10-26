<x-layouts::app :title="__('Home')">
    <div
        class="-m-6 flex min-h-screen flex-1 flex-col gap-4 bg-cover bg-center bg-no-repeat lg:-m-8"
        style="background-image: url('{{ asset('images/Lichtdatabank_achtergrond_wit.jpg') }}')"
    >
        <div class="grid auto-rows-min gap-4 p-6 md:grid-cols-3 lg:p-8">
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
