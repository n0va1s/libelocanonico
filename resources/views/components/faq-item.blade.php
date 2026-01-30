    @props(['question'])

    <div x-data="{ open: false }"
        class="group border border-zinc-100 bg-white rounded-2xl transition-all hover:border-[#c68e28]/30">
        <button @click="open = !open"
            class="w-full px-6 py-5 flex items-center justify-between text-left focus:outline-none">
            <span
                class="font-bold text-brand-dark text-base md:text-lg pr-4 leading-tight group-hover:text-[#c68e28] transition-colors">
                {{ $question }}
            </span>
            <div class="shrink-0 w-8 h-8 rounded-full bg-zinc-50 flex items-center justify-center transition-transform duration-300"
                :class="open ? 'rotate-180 bg-orange-50' : ''">
                <svg class="w-4 h-4 text-zinc-400" :class="open ? 'text-[#c68e28]' : ''" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </button>

        <div x-show="open" x-collapse x-cloak>
            <div class="px-6 pb-6 text-zinc-500 leading-relaxed text-sm md:text-base border-t border-zinc-50 pt-4">
                {{ $slot }}
            </div>
        </div>
    </div>
