<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component {
    public string $status;
    public string $titulo;

    public function mount()
    {
        // Captura o parâmetro da URL (?viabilidade=alta)
        $this->status = request()->query('viabilidade', 'analise');

        $this->titulo = $this->status === 'alta' ? 'Indícios de Nulidade Identificados' : 'Análise Técnica Necessária';
    }
}; ?>

<div class="py-16 bg-brand bg-mesh-subtle min-h-screen">
    <div class="container mx-auto px-6">
        <div
            class="max-w-3xl mx-auto bg-white rounded-[3rem] p-10 md:p-16 shadow-xl border border-zinc-100 text-center animate-fade-in">

            {{-- Ícone de Status --}}
            <div class="mb-8 flex justify-center">
                @if ($status === 'alta')
                    <div
                        class="w-24 h-24 bg-green-50 text-green-600 rounded-full flex items-center justify-center shadow-inner">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                @else
                    <div
                        class="w-24 h-24 bg-amber-50 text-[#c68e28] rounded-full flex items-center justify-center shadow-inner">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                @endif
            </div>

            <h1 class="text-3xl md:text-4xl font-bold text-brand-dark font-serif-title mb-6 leading-tight">
                {{ $titulo }}
            </h1>

            <div class="space-y-6 text-lg text-zinc-500 mb-12 leading-relaxed text-balance">
                @if ($status === 'alta')
                    <p>Sua simulação aponta para fatos que o <strong>Código de Direito Canônico</strong> reconhece como
                        possíveis vícios de consentimento.</p>
                    <p class="text-base bg-green-50/50 p-4 rounded-2xl border border-green-100 text-green-800">
                        Isso significa que há fundamentos jurídicos para iniciar um processo de declaração de nulidade
                        matrimonial.
                    </p>
                @else
                    <p>As respostas fornecidas não indicam um vício óbvio, mas isso <strong>não descarta a
                            nulidade</strong>.</p>
                    <p class="text-base bg-zinc-50 p-4 rounded-2xl border border-zinc-100">
                        Muitas causas de nulidade são subjetivas e exigem uma entrevista canônica detalhada para serem
                        identificadas.
                    </p>
                @endif
            </div>

            {{-- CTAs (Chamadas para Ação) --}}
            <div class="grid gap-4 sm:flex sm:justify-center">

                <flux:button href="{{ route('libelo.form') }}" variant="primary">
                    Iniciar Meu Libelo
                </flux:button>
                <flux:button href="{{ route('viabilidade') }}" variant="primary">
                    Refazer Meu Teste
                </flux:button>
            </div>

            <div class="mt-16 pt-8 border-t border-zinc-100">
                <blockquote class="text-sm text-zinc-400 italic">
                    "A busca pela verdade é o objetivo supremo do processo canônico."
                </blockquote>
            </div>
        </div>
    </div>
</div>
