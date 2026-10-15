@props(['title' => null, 'mainClass' => null])

<x-layouts::app.sidebar :title="$title ?? null">
    <flux:main :class="$mainClass">
        {{ $slot }}
    </flux:main>
</x-layouts::app.sidebar>
