<x-layouts::app.sidebar :title="$title ?? null">
    <flux:main :class="request()->routeIs('richtlijn') ? '!p-0 h-[calc(100dvh-4rem)] w-full overflow-hidden lg:h-dvh' : ''">
        {{ $slot }}
    </flux:main>
</x-layouts::app.sidebar>
