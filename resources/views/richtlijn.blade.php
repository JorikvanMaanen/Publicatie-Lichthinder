<x-layouts::app :title="__('Richtlijn')">
    <iframe
        src="{{ asset('pdf/richtlijn.pdf') }}"
        title="{{ __('Lichthinder richtlijn') }}"
        class="h-[calc(100dvh-5rem)] min-h-[32rem] w-full rounded-xl border border-zinc-200 bg-white dark:border-zinc-700"
    ></iframe>
</x-layouts::app>
