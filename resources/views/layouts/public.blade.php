@props(['title' => null])

<x-layouts::public.header :title="$title">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts::public.header>
