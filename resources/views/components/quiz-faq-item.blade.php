@props([
    'title',
    'content',
    'color' => 'indigo', // cor padrão
])

@php
    // Mapeamento de cores para manter a consistência com os movimentos
    $colors = [
        'blue' => [
            'bg' => 'bg-blue-50',
            'border' => 'border-blue-100',
            'text' => 'text-blue-700',
            'icon' => 'text-blue-500',
        ],
        'orange' => [
            'bg' => 'bg-orange-50',
            'border' => 'border-orange-100',
            'text' => 'text-orange-700',
            'icon' => 'text-orange-500',
        ],
        'green' => [
            'bg' => 'bg-green-50',
            'border' => 'border-green-100',
            'text' => 'text-green-700',
            'icon' => 'text-green-500',
        ],
        'indigo' => [
            'bg' => 'bg-indigo-50',
            'border' => 'border-indigo-100',
            'text' => 'text-indigo-700',
            'icon' => 'text-indigo-500',
        ],
    ];

    $selected = $colors[$color] ?? $colors['indigo'];
@endphp

<div x-data="{ open: false }"
    class="border {{ $selected['border'] }} rounded-2xl overflow-hidden transition-all duration-300 bg-white shadow-sm hover:shadow-md">

    <button @click="open = !open" class="w-full flex items-center justify-between p-5 text-left focus:outline-none">

        <span class="font-semibold text-gray-800 pr-4">
            {{ $title }}
        </span>

        <div class="flex-shrink-0 {{ $selected['bg'] }} p-2 rounded-lg transition-transform duration-300"
            :class="open ? 'rotate-180' : ''">
            <svg class="w-5 h-5 {{ $selected['icon'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </button>

    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        class="px-5 pb-5">
        <div class="h-px w-full bg-gray-100 mb-4"></div>
        <p class="text-gray-600 leading-relaxed">
            {{ $content }}
        </p>
    </div>
</div>
