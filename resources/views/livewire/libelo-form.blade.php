<div class="max-w-5xl mx-auto pb-20">
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

        <div class="mt-6 flex flex-wrap gap-4">
            <div
                class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-full border border-white/20 flex items-center gap-2 text-sm">
                <flux:icon.scale class="size-4 text-brand-gold" /> Conforme normas da CNBB
            </div>
            <div
                class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-full border border-white/20 flex items-center gap-2 text-sm">
                <flux:icon.shield-check class="size-4 text-brand-gold" /> Dados protegidos pela LGPD
            </div>
        </div>
    </div>

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

            {{-- ETAPA 1: DADOS PESSOAIS --}}
            @if ($step == 1)
                <div class="space-y-8 animate-fade-in">
                    <div>
                        <h2 class="text-2xl text-brand-dark mb-1">Seus Dados Pessoais</h2>
                        <p class="text-zinc-500 text-sm">Preencha suas informações como demandante</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <flux:input label="Nome Completo *" wire:model="nome" class="md:col-span-2" />
                        <flux:input type="date" label="Data de Nascimento *" wire:model="nascimento" />
                        <flux:input label="Nacionalidade *" wire:model="nacionalidade" />
                        <flux:input label="Profissão *" wire:model="profissao" />
                        <flux:input label="RG *" wire:model="rg" />
                        <flux:input label="CPF * (apenas números)" wire:model="cpf" />
                        <flux:input label="Telefone *" wire:model="telefone" />
                        <flux:input type="email" label="Email *" wire:model="email" />
                        <flux:input label="Endereço Completo *" wire:model="endereco" class="md:col-span-2" />
                        <flux:input label="Cidade *" wire:model="cidade" />
                        <flux:input label="UF *" wire:model="uf" maxlength="2" />
                        <flux:input label="CEP *" wire:model="cep" />
                    </div>

                    <hr class="border-zinc-100">

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <h3 class="md:col-span-3 font-semibold text-zinc-800">Dados do Batismo</h3>
                        <flux:input label="Paróquia do Batismo *" wire:model="batismo_paroquia" />
                        <flux:input label="Diocese do Batismo *" wire:model="batismo_diocese" />
                        <flux:input type="date" label="Data do Batismo *" wire:model="batismo_data" />
                    </div>
                </div>
            @endif

            {{-- ETAPA 4: NARRATIVA (EXEMPLO DE TEXTAREA) --}}
            @if ($step == 4)
                <div class="space-y-8 animate-fade-in">
                    <flux:heading size="xl">Narrativa dos Fatos</flux:heading>

                    <div class="bg-amber-50 border border-amber-200 p-4 rounded-xl text-amber-800 text-sm">
                        <strong>Dica:</strong> Descreva comportamentos objetivos e fatos. Evite apenas adjetivos.
                    </div>

                    <div class="space-y-6">
                        <flux:textarea label="1. Namoro e Noivado" placeholder="Como se conheceram?"
                            wire:model="narrativa_namoro" rows="5" />
                        <flux:textarea label="2. Celebração e Lua de Mel" wire:model="narrativa_lua_mel"
                            rows="5" />
                        <flux:textarea label="3. Vida Conjugal" wire:model="narrativa_convivencia" rows="5" />
                    </div>
                </div>
            @endif

            <div class="mt-12 flex items-center justify-between border-t border-zinc-100 pt-8">
                <div>
                    @if ($step > 1)
                        <flux:button variant="ghost" wire:click="previousStep" icon="arrow-left">Anterior</flux:button>
                    @endif
                </div>

                <div class="flex items-center gap-4 text-sm font-medium text-zinc-400">
                    Etapa {{ $step }} de {{ $totalSteps }}
                </div>

                <div>
                    @if ($step < $totalSteps)
                        <flux:button variant="primary" wire:click="nextStep" icon-trailing="arrow-right"
                            class="bg-brand-dark!">Próximo</flux:button>
                    @else
                        <flux:button variant="primary" type="submit" class="bg-brand-gold!">Finalizar e Gerar Libelo
                        </flux:button>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
