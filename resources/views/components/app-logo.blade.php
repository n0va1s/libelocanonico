@props([
    'sidebar' => false,
])

@if ($sidebar)
    <flux:sidebar.brand name="Libelo Canônico" {{ $attributes }}>
        <x-slot name="logo" class="flex items-center justify-center">
            <x-app-logo-icon class="size-6 fill-current text-[#c68e28]" />
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="Libelo Canônico" {{ $attributes }}>
        <x-slot name="logo" class="flex items-center justify-center">
            <x-app-logo-icon class="size-6 fill-current text-[#c68e28]" />
        </x-slot>
    </flux:brand>
@endif
