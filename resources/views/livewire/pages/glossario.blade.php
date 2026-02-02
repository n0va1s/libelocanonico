<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component {
    //
}; ?>

<div>
    {{-- Header da Página --}}
    <section class="pt-12 pb-10 bg-brand border-b border-zinc-100">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-brand-dark font-serif-title mb-4">Glossário Canônico</h1>
                <p class="text-[#c68e28] font-bold text-lg mb-4">CIC 1095-1107 — Vícios de Consentimento Matrimonial</p>
                <p class="text-zinc-500 leading-relaxed max-w-2xl">
                    Entenda em linguagem simples os 20 artigos do Código de Direito Canônico que tratam dos vícios de
                    consentimento matrimonial — as causas mais comuns de nulidade matrimonial.
                </p>
            </div>
        </div>
    </section>

    {{-- Filtros e Conteúdo --}}
    <section class="py-12 bg-brand-bg min-h-screen" x-data="{ tab: 'todos' }">
        <div class="container mx-auto px-6">

            {{-- Navegação de Categorias (Scroll horizontal no mobile) --}}
            <div
                class="flex items-center gap-2 overflow-x-auto pb-4 mb-12 no-scrollbar -mx-6 px-6 md:mx-0 md:px-0 md:flex-wrap">
                @php
                    $categories = [
                        'todos' => 'Todos',
                        'capacidade' => 'Capacidade',
                        'consentimento' => 'Consentimento',
                        'dolo' => 'Dolo',
                        'simulacao' => 'Simulação',
                        'condicao' => 'Condição',
                        'coacao' => 'Coação',
                        'forma' => 'Forma',
                    ];
                @endphp
                @foreach ($categories as $key => $label)
                    <button @click="tab = '{{ $key }}'"
                        :class="tab === '{{ $key }}' ? 'bg-[#c68e28] text-white shadow-lg shadow-orange-900/10' :
                            'bg-white text-zinc-500 border-zinc-100 hover:border-zinc-300'"
                        class="px-5 py-2.5 rounded-full border text-sm font-bold transition-all whitespace-nowrap">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            {{-- Grid de Itens --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Categoria: Capacidade --}}
                <div x-show="tab === 'todos' || tab === 'capacidade'" class="space-y-6">
                    <div class="flex items-center justify-between border-b border-zinc-200 pb-2 mb-4">
                        <h2 class="text-xl font-bold text-brand-dark font-serif-title">Capacidade</h2>
                        <span class="text-xs font-bold text-zinc-400 uppercase tracking-widest">3 cânones</span>
                    </div>

                    <x-glossario-card canon="1095§1" title="Falta de uso da razão">
                        Quem, no momento do casamento, não tinha capacidade mental para entender o que estava fazendo
                        (por doença mental grave ou perturbação momentânea).
                    </x-glossario-card>

                    <x-glossario-card canon="1095§2" title="Defeito grave de discernimento">
                        Mesmo entendendo o que é casamento em teoria, a pessoa não consegue avaliar corretamente o que
                        significa essa entrega mútua e perpétua.
                    </x-glossario-card>

                    <x-glossario-card canon="1095§3" title="Incapacidade de assumir obrigações">
                        A pessoa até entende o que é casamento, mas por algum problema psicológico ou psíquico, não
                        consegue cumprir as obrigações básicas (como a fidelidade).
                    </x-glossario-card>
                </div>

                {{-- Categoria: Consentimento --}}
                <div x-show="tab === 'todos' || tab === 'consentimento'" class="space-y-6">
                    <div class="flex items-center justify-between border-b border-zinc-200 pb-2 mb-4">
                        <h2 class="text-xl font-bold text-brand-dark font-serif-title">Consentimento</h2>
                        <span class="text-xs font-bold text-zinc-400 uppercase tracking-widest">6 cânones</span>
                    </div>

                    <x-glossario-card canon="1096" title="Ignorância sobre o matrimônio">
                        É preciso saber o mínimo: casamento é uma união permanente entre homem e mulher, aberta a ter
                        filhos mediante cooperação sexual.
                    </x-glossario-card>

                    <x-glossario-card canon="1097§1" title="Erro sobre a pessoa">
                        Casar pensando que é uma pessoa quando na verdade é outra (substituição física).
                    </x-glossario-card>

                    <x-glossario-card canon="1097§2" title="Erro sobre qualidade visada">
                        Casar especificamente por causa de uma qualidade da pessoa (ex: ser honesta, ter certa fé) que
                        era a razão principal do "sim".
                    </x-glossario-card>

                    {{-- Adicionar os demais de consentimento seguindo o mesmo padrão --}}
                </div>

                {{-- Categoria: Dolo --}}
                <div x-show="tab === 'todos' || tab === 'dolo'" class="space-y-6">
                    <div class="flex items-center justify-between border-b border-zinc-200 pb-2 mb-4">
                        <h2 class="text-xl font-bold text-brand-dark font-serif-title">Dolo</h2>
                        <span class="text-xs font-bold text-zinc-400 uppercase tracking-widest">1 cânon</span>
                    </div>

                    <x-glossario-card canon="1098" title="Dolo (Engano Grave)">
                        Se alguém mentiu deliberadamente sobre algo grave (doença séria, infertilidade oculta, crime)
                        para conseguir o consentimento do outro.
                    </x-glossario-card>
                </div>

                {{-- Outras categorias seguem o mesmo padrão x-show... --}}
            </div>
        </div>
    </section>

    {{-- CTA Final --}}
    <section class="py-16 bg-brand">
        <div class="container mx-auto px-6">
            <div
                class="max-w-4xl mx-auto bg-brand-dark rounded-[2.5rem] p-8 md:p-12 text-center shadow-2xl relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none bg-mesh-subtle"></div>

                <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 font-serif-title relative z-10">Identificou
                    algum vício no seu casamento?</h2>
                <p class="text-zinc-400 mb-10 max-w-2xl mx-auto relative z-10">
                    Faça nossa avaliação gratuita para o diagnóstico do seu caso ou inicie a preparação do seu
                    libelo.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                    <a href="{{ route('diagnostico') }}"
                        class="w-full sm:w-auto px-8 py-4 bg-[#c68e28] text-brand-dark rounded-2xl font-bold transition-all hover:bg-[#b37f24] active:scale-95">
                        Fazer Diagnóstico
                    </a>
                    <a href="{{ route('dashboard') }}"
                        class="w-full sm:w-auto px-8 py-4 bg-white/10 text-white border border-white/20 rounded-2xl font-bold transition-all hover:bg-white/20">
                        Preparar Libelo
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
