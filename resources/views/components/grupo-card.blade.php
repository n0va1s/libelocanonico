@props(['title', 'icon'])

<div class="bg-white p-8 rounded-3xl border border-zinc-100 shadow-sm hover:shadow-md transition-all group">
    <div
        class="w-12 h-12 bg-orange-50 text-[#c68e28] rounded-2xl flex items-center justify-center mb-6 transition-colors group-hover:bg-[#c68e28] group-hover:text-white">
        <flux:icon :name="$icon" variant="outline" />
    </div>
    <h3 class="text-xl font-bold text-brand-dark mb-3">{{ $title }}</h3>
    <p class="text-zinc-500 text-sm leading-relaxed">
        {{ $slot }}
    </p>
</div>
