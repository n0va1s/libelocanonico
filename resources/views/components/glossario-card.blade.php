@props(['canon', 'title'])
<div class="bg-white p-6 rounded-2xl border border-zinc-100 shadow-sm hover:shadow-md transition-shadow group">
    <div class="text-[#c68e28] font-bold text-xs mb-1 group-hover:underline">Cân. {{ $canon }}</div>
    <h3 class="text-brand-dark font-bold text-base mb-2 leading-tight">{{ $title }}</h3>
    <p class="text-zinc-500 text-sm leading-relaxed">
        {{ $slot }}
    </p>
</div>
