<div class="max-w-5xl mx-auto pb-20">
    {{-- HEADER DO COMPONENTE --}}
    <div
        class="bg-gradient-to-r from-slate-900 to-indigo-900 rounded-3xl p-8 mb-8 text-white relative overflow-hidden shadow-2xl">
        <div class="relative z-10 flex items-center gap-6">
            <div class="bg-brand-gold p-4 rounded-2xl shadow-lg">
                <flux:icon.document-text variant="solid" class="size-8 text-white" />
            </div>
            <div>
                <h1 class="text-4xl font-serif-title">Formulário do Libelo</h1>
                <p class="text-blue-100/80">Preparação do pedido de nulidade matrimonial</p>
            </div>
        </div>
        {{-- ... manter badges de proteção e LGPD ... --}}
    </div>

    {{-- VERIFICAÇÃO DE PAGAMENTO --}}
    @if (!auth()->user()->pagamentos()->where('plano', '>=', 'completo')->exists())
        {{-- ESTADO: SEM ACESSO AO PLANO --}}
        <div class="bg-white rounded-3xl border border-zinc-100 shadow-xl p-12 text-center animate-fade-in">
            <div class="max-w-md mx-auto space-y-6">
                <div class="inline-flex p-4 rounded-full bg-amber-50 text-brand-gold mb-4">
                    <flux:icon.lock-closed variant="solid" class="size-12" />
                </div>

                <header class="space-y-2">
                    <h2 class="text-2xl font-bold text-brand-dark">Você ainda não iniciou seu libelo.</h2>
                    <p class="text-zinc-500">Para criar seu libelo, você precisa do plano <strong>Completo</strong> ou
                        superior.</p>
                </header>

                <div class="pt-4">
                    {{-- Botão de Upgrade com o estilo dourado que definimos no @theme --}}
                    <flux:button href="#" variant="primary" icon="sparkles"
                        class="w-full !text-brand-dark py-4 text-lg">
                        Conheça Nossos Planos
                    </flux:button>
                </div>

                <p class="text-xs text-zinc-400">
                    O plano completo inclui a geração automática do documento e suporte básico.
                </p>
            </div>
        </div>
    @else
        {{-- ESTADO: USUÁRIO POSSUI PLANO (FORMULÁRIO LIBERADO) --}}

        {{-- Progress Steps --}}
        <div class="flex items-center justify-between mb-12 px-4 overflow-x-auto">
            @foreach (['Seus Dados', 'Parte Contrária', 'Casamento', 'Narrativa', 'Fundamentos', 'Testemunhas'] as $index => $label)
                <div class="flex flex-col items-center min-w-[100px]">
                    <div
                        class="size-10 rounded-full flex items-center justify-center transition-all duration-500 {{ $step > $index + 1 ? 'bg-green-500 text-white' : ($step == $index + 1 ? 'bg-brand-gold text-white shadow-lg ring-4 ring-brand-gold/20' : 'bg-zinc-100 text-zinc-400') }}">
                        @if ($step > $index + 1)
                            <flux:icon.check class="size-5" />
                        @else
                            {{ $index + 1 }}
                        @endif
                    </div>
                    <span
                        class="mt-2 text-xs font-medium {{ $step == $index + 1 ? 'text-brand-dark' : 'text-zinc-400' }}">{{ $label }}</span>
                </div>
                @if ($index < 5)
                    <div class="flex-1 h-px bg-zinc-200 mx-2 mb-6"></div>
                @endif
            @endforeach
        </div>

        <div class="bg-white rounded-3xl border border-zinc-100 shadow-xl shadow-zinc-200/50 p-8 md:p-12 min-h-[500px]">
            <form wire:submit.prevent="submit">
                {{-- Conteúdo do formulário (Etapa 1, 4, etc conforme seu código original) --}}
                @if ($step == 1)
                    <div class="space-y-8 animate-fade-in">
                        {{-- ... Campos de Dados Pessoais ... --}}
                    </div>
                @endif

                {{-- Navegação do Formulário --}}
                <div class="mt-12 flex items-center justify-between border-t border-zinc-100 pt-8">
                    <flux:button variant="ghost" wire:click="previousStep" icon="arrow-left" :disabled="$step === 1">
                        Anterior</flux:button>

                    <div class="flex items-center gap-4 text-sm font-medium text-zinc-400">
                        Etapa {{ $step }} de {{ $totalSteps }}
                    </div>

                    @if ($step < $totalSteps)
                        <flux:button variant="primary" wire:click="nextStep" icon-trailing="arrow-right">Próximo
                        </flux:button>
                    @else
                        <flux:button variant="primary" type="submit" class="bg-brand-gold-forced">Finalizar e Gerar
                            Libelo</flux:button>
                    @endif
                </div>
            </form>
        </div>
    @endif
</div>
