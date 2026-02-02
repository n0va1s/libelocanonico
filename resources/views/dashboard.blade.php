<x-layouts::app :title="__('Painel')">
    <div class="flex h-full w-full flex-1 flex-col gap-8 rounded-xl p-4 md:p-8">

        {{-- Boas-vindas --}}
        <header class="animate-fade-in">
            <flux:heading size="xl" level="1">Olá, {{ auth()->user()->name }}! 👋</flux:heading>
            <flux:subheading size="lg">Bem-vindo à sua área pessoal no <span
                    class="text-brand-gold font-semibold">LibeloCanônico</span>.</flux:subheading>
        </header>

        {{-- Grid de Status do Libelo --}}
        <div class="grid gap-4 md:grid-cols-3">
            {{-- Card: Número do Libelo --}}
            <flux:card class="flex flex-col gap-2">
                <div class="flex items-center gap-2 text-zinc-500">
                    <flux:icon.hashtag variant="outline" class="size-4" />
                    <flux:label>Número do Libelo</flux:label>
                </div>
                <div class="text-3xl font-bold text-brand-dark">18452</div>
            </flux:card>

            {{-- Card: Situação --}}
            <flux:card class="flex flex-col gap-2">
                <div class="flex items-center gap-2 text-zinc-500">
                    <flux:icon.arrow-path variant="outline" class="size-4" />
                    <flux:label>Situação</flux:label>
                </div>
                <div>
                    {{-- Removido o inset="top-bottom" que causava o erro --}}
                    <flux:badge color="green" size="sm">Enviado</flux:badge>
                </div>
            </flux:card>

            {{-- Card: Data de Entrega --}}
            <flux:card class="flex flex-col gap-2">
                <div class="flex items-center gap-2 text-zinc-500">
                    <flux:icon.calendar variant="outline" class="size-4" />
                    <flux:label>Data da Entrega</flux:label>
                </div>
                <div class="text-xl font-semibold text-brand-dark">14/02/2025</div>
            </flux:card>
        </div>

        {{-- Área de Convite (Comunidade) --}}
        <div class="relative overflow-hidden rounded-3xl bg-brand-dark p-8 md:p-12 text-white shadow-2xl">
            {{-- Elemento Decorativo --}}
            <div class="absolute -right-20 -top-20 size-64 rounded-full bg-brand-gold/10 blur-3xl"></div>

            <div class="relative z-10 max-w-2xl">
                <flux:heading size="xl" class="text-white mb-4">Você não precisa caminhar sozinho.</flux:heading>
                <p class="text-zinc-400 text-lg mb-8 leading-relaxed">
                    O processo de nulidade é também um tempo de cura. Convidamos você a encontrar apoio em grupos de
                    casais e comunidades paroquiais que podem oferecer acolhimento espiritual e fraterno durante esta
                    jornada.
                </p>

                <div class="flex flex-wrap gap-4">
                    <flux:button href="{{ route('grupos') }}" variant="primary"
                        class="bg-brand-gold !text-brand-dark border-none">
                        <flux:icon.user-group class="mr-2" />
                        Encontrar um Grupo
                    </flux:button>

                    <flux:button href="#" variant="ghost" class="text-white hover:bg-white/10">
                        Saber mais sobre apoio pastoral
                    </flux:button>
                </div>
            </div>
        </div>

    </div>
</x-layouts::app>
