<x-layouts::public :title="'Libelo Canônico'">
    {{-- Fonts e Estilos Customizados --}}
    @push('styles')
        <link href="https://fonts.bunny.net/css?family=playfair-display:600,700i|instrument-sans:400,500,600"
            rel="stylesheet" />
    @endpush

    {{-- Alerta de Sessão --}}
    <div class="pt-4 px-4 w-full">
        <x-session-alert />
    </div>

    {{-- HERO SECTION --}}
    <section class="relative pt-10 pb-20 md:pt-16 md:pb-28 bg-brand overflow-hidden">
        <div class="absolute inset-0 pointer-events-none opacity-50 md:opacity-100">
            <div
                class="absolute top-0 -left-[10%] w-[50%] h-[100%] bg-gradient-to-r from-zinc-100/50 to-transparent blur-3xl">
            </div>
            <div
                class="absolute top-0 -right-[10%] w-[50%] h-[100%] bg-gradient-to-l from-zinc-100/50 to-transparent blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10 animate-fade-in">
            <div class="max-w-5xl mx-auto text-center">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-[#f3ede2] border border-[#e8dfcf] mb-8 shadow-sm">
                    <svg class="w-4 h-4 text-[#c68e28]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <span class="text-[10px] md:text-xs font-bold text-[#c68e28] uppercase tracking-widest">Orientação
                        Canônica Digital</span>
                </div>

                <h1
                    class="text-3xl md:text-[5rem] font-bold tracking-tight text-[#1b1b1b] mb-8 leading-[1.1] md:leading-[1.05]">
                    O matrimônio é indissolúvel. <br class="hidden md:block"> Mas alguns nunca foram
                    <span class="font-serif-title text-[#c68e28] italic">válidos</span>
                </h1>

                <p class="text-base md:text-lg text-zinc-500 max-w-3xl mx-auto mb-10 leading-relaxed px-2">
                    A Igreja defende a indissolubilidade do vínculo conjugal. Porém, o tribunal eclesiástico pode
                    reconhecer que o matrimônio nunca existiu validamente.
                </p>

                <div class="flex flex-col md:flex-row items-center justify-center gap-4 px-4 md:px-0">
                    <a href="#simulacao"
                        class="group flex items-center justify-center gap-3 px-10 py-5 bg-[#c68e28] text-brand-dark rounded-2xl font-bold text-lg hover:bg-[#b37f24] transition-all shadow-lg w-full md:w-auto">
                        Faça Seu Simulado
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#como-funciona"
                        class="px-10 py-5 bg-white border-2 border-[#1b1b1b] text-[#1b1b1b] rounded-2xl font-bold text-lg hover:bg-zinc-50 transition-all w-full md:w-auto text-center">
                        Como Funciona
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- COMO FUNCIONA --}}
    <section id="como-funciona" class="py-16 bg-brand bg-mesh-subtle">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10 animate-fade-in">
                <div
                    class="inline-flex items-center px-3 py-1 rounded-full bg-orange-100/50 border border-orange-200 mb-4">
                    <span class="text-[10px] font-bold text-orange-700 uppercase tracking-widest">Processo
                        Orientado</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-brand-dark font-serif-title">Como Funciona</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                @php
                    $steps = [
                        [
                            'num' => '01',
                            'title' => 'Simulação',
                            'desc' => 'Responda 12 perguntas baseadas nos vícios de consentimento.',
                        ],
                        [
                            'num' => '02',
                            'title' => 'Prepare o Libelo',
                            'desc' => 'Preencha seus dados e escreva sua narrativa em formato padrão.',
                        ],
                        [
                            'num' => '03',
                            'title' => 'Envie para a Cúria',
                            'desc' => 'Enviamos seu libelo automaticamente por e-mail seguro.',
                        ],
                        [
                            'num' => '04',
                            'title' => 'Acompanhe',
                            'desc' => 'Acompanhe os prazos públicos do tribunal com transparência.',
                        ],
                    ];
                @endphp
                @foreach ($steps as $step)
                    <div
                        class="relative group p-8 bg-white rounded-[2rem] border border-zinc-100 shadow-sm hover:shadow-xl transition-all">
                        <div
                            class="absolute -top-3 -right-2 w-10 h-10 bg-[#c68e28] text-brand-dark rounded-full flex items-center justify-center font-bold text-xs border-4 border-brand-bg shadow-sm">
                            {{ $step['num'] }}
                        </div>
                        <h3 class="text-xl font-bold text-brand-dark mb-4">{{ $step['title'] }}</h3>
                        <p class="text-zinc-500 text-sm leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SIMULAÇÃO --}}
    <section id="simulacao" class="py-16 bg-brand-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-8 animate-fade-in">
                <h2 class="text-3xl md:text-4xl font-bold text-brand-dark font-serif-title">Faça seu Simulado</h2>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="bg-white p-6 md:p-10 rounded-[2.5rem] shadow-lg border border-zinc-100">
                    <form action="#" class="space-y-6" onsubmit="return false;">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Nome Completo"
                                class="w-full px-6 py-4 bg-zinc-50 border border-zinc-100 rounded-2xl focus:border-[#c68e28] outline-none transition-all text-base">
                            <input type="tel" placeholder="WhatsApp"
                                class="w-full px-6 py-4 bg-zinc-50 border border-zinc-100 rounded-2xl focus:border-[#c68e28] outline-none transition-all text-base">
                        </div>
                        <input type="email" placeholder="E-mail"
                            class="w-full px-6 py-4 bg-zinc-50 border border-zinc-100 rounded-2xl focus:border-[#c68e28] outline-none transition-all text-base">

                        <a href="{{ route('viabilidade') }}" wire:navigate
                            class="group w-full flex items-center justify-center gap-3 px-10 py-5 bg-[#c68e28] text-brand-dark rounded-2xl font-bold text-lg hover:bg-[#b37f24] transition-all shadow-lg">
                            <span class="flex items-center gap-3">
                                Responder Perguntas
                                <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- GRUPOS DE APOIO (Call to Action) --}}
    <section class="py-16 bg-white border-y border-zinc-100 relative overflow-hidden">
        {{-- Elemento Decorativo Sutil --}}
        <div
            class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-orange-50 rounded-full blur-3xl opacity-50 pointer-events-none">
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <span class="text-[#c68e28] font-bold text-sm uppercase tracking-[0.2em] mb-4 block">Enquanto o
                        Resultado não sai...</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-brand-dark font-serif-title mb-6">Você não precisa
                        caminhar sozinho(a)</h2>
                    <p class="text-zinc-500 text-lg leading-relaxed">
                        Existem grupos de apoio para casais em segunda união espalhados por todo o Brasil, prontos para
                        acolher você e seu cônjuge com carinho e compreensão.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    {{-- Card 1 --}}
                    <div class="flex flex-col items-center text-center p-4">
                        <div
                            class="w-12 h-12 bg-orange-50 text-[#c68e28] rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-brand-dark mb-2">Acolhimento Fraterno</h3>
                        <p class="text-zinc-500 text-sm">Encontre pessoas que vivem situações semelhantes e compartilhe
                            experiências.</p>
                    </div>

                    {{-- Card 2 --}}
                    <div class="flex flex-col items-center text-center p-4">
                        <div
                            class="w-12 h-12 bg-orange-50 text-[#c68e28] rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-brand-dark mb-2">Apoio Espiritual</h3>
                        <p class="text-zinc-500 text-sm">Cresça na fé junto com outros casais, acompanhados pela
                            Igreja.</p>
                    </div>

                    {{-- Card 3 --}}
                    <div class="flex flex-col items-center text-center p-4">
                        <div
                            class="w-12 h-12 bg-orange-50 text-[#c68e28] rounded-full flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-brand-dark mb-2">Grupos pelo Brasil</h3>
                        <p class="text-zinc-500 text-sm">Pastoral Familiar, Caminho de Emaús e outros movimentos em
                            todo o país.</p>
                    </div>
                </div>

                <div class="bg-zinc-50 rounded-[2.5rem] p-8 md:p-10 border border-zinc-100 text-center">
                    <blockquote class="mb-8">
                        <p class="text-xl md:text-2xl font-serif-title italic text-brand-dark leading-relaxed">
                            "A Igreja é chamada a ser sempre a casa aberta do Pai... onde há lugar para todos."
                        </p>
                        <cite class="text-sm font-bold text-[#c68e28] uppercase tracking-widest mt-4 block not-italic">
                            — Papa Francisco, Evangelii Gaudium
                        </cite>
                    </blockquote>

                    <a href="{{ route('grupos') }}" wire:navigate
                        class="group inline-flex items-center justify-center gap-3 px-10 py-5 bg-[#c68e28] text-brand-dark rounded-2xl font-bold text-lg hover:bg-[#b37f24] transition-all shadow-lg active:scale-95">
                        Encontrar Grupos de Apoio
                        <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="py-16 bg-brand-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-brand-dark font-serif-title">Tire suas Dúvidas</h2>
            </div>

            <div class="max-w-4xl mx-auto space-y-3 px-2 md:px-0">
                @php
                    $faqs = [
                        [
                            'pergunta' => 'O que é nulidade matrimonial canônica?',
                            'resposta' =>
                                'Diferente do divórcio civil, a nulidade é o reconhecimento pela Igreja de que, por algum motivo grave (vício de consentimento, incapacidade ou falta de forma), o vínculo matrimonial nunca existiu validamente desde o início.',
                        ],
                        [
                            'pergunta' => 'Quanto tempo demora um processo no Tribunal Eclesiástico?',
                            'resposta' =>
                                'Após a reforma do Papa Francisco (Mitis Iudex), os processos tornaram-se mais céleres. Em média, um processo ordinário leva de 12 a 18 meses, podendo ser mais rápido em casos específicos (Processo Breve).',
                        ],
                        [
                            'pergunta' => 'Quais são os principais motivos para a nulidade?',
                            'resposta' =>
                                'Os motivos (cânones) incluem: exclusão da prole, exclusão da fidelidade, imaturidade grave, incapacidade de assumir as obrigações matrimoniais por causas psíquicas, erro sobre a pessoa, entre outros.',
                        ],
                        [
                            'pergunta' => 'É necessário advogado para entrar com o pedido?',
                            'resposta' =>
                                'Embora não seja estritamente obrigatório em todos os tribunais, é altamente recomendável ter um patrono ou orientador canonista para redigir o libelo e indicar as provas e testemunhas corretas.',
                        ],
                        [
                            'pergunta' => 'Quem recebeu a nulidade pode casar novamente na Igreja?',
                            'resposta' =>
                                'Sim. Uma vez declarada a nulidade e não havendo nenhum impedimento ou veto (cláusula de restrição), a pessoa recupera o estado livre e pode contrair novas núpcias na Igreja Católica.',
                        ],
                    ];
                @endphp

                @foreach ($faqs as $faq)
                    <div x-data="{ open: false }"
                        class="bg-white border border-zinc-100 rounded-2xl overflow-hidden transition-all">
                        <button @click="open = !open"
                            class="w-full p-5 flex items-center justify-between text-left focus:outline-none active:bg-zinc-50">
                            <span
                                class="font-bold text-brand-dark font-serif-title text-sm md:text-base">{{ $faq['pergunta'] }}</span>
                            <svg class="w-5 h-5 text-zinc-400 shrink-0 transition-transform duration-300"
                                :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-cloak>
                            <div
                                class="px-5 pb-5 text-zinc-500 text-sm leading-relaxed border-t border-zinc-50 pt-3 italic">
                                {{ $faq['resposta'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div
                class="max-w-4xl mx-auto mt-10 bg-zinc-100/80 rounded-[2rem] p-8 md:p-10 text-center border border-zinc-200/50">
                <h3 class="text-xl font-medium text-brand-dark mb-4">Ainda tem perguntas?</h3>
                <div class="flex flex-col gap-4 items-center">
                    <a href="{{ route('faq') }}" wire:navigate
                        class="inline-flex items-center gap-2 text-[#c68e28] font-bold hover:underline">
                        Acesse a nossa FAQ
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <span class="text-zinc-400 text-xs uppercase tracking-widest">ou envie um e-mail</span>
                    <a href="mailto:suporte@libelocanonico.com.br"
                        class="text-zinc-600 font-medium break-all border-b border-zinc-300 pb-1">suporte@libelocanonico.com.br</a>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-brand-dark text-white pt-20 pb-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16 text-center md:text-left">

                {{-- Coluna 1: Logo e Missão --}}
                <div class="md:col-span-5 space-y-6">
                    <div class="flex items-center justify-center md:justify-start gap-3">
                        <div class="w-10 h-10 bg-[#c68e28] rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-brand-dark" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05l-3.293 3.293a1 1 0 01-1.414 0l-3.293-3.293a1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.789l1.599.8L9 4.323V3a1 1 0 011-1z" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold tracking-tight">Libelo<span
                                class="text-[#c68e28]">Canônico</span></span>
                    </div>
                    <p class="text-zinc-400 max-w-sm leading-relaxed mx-auto md:mx-0 text-sm">
                        Democratizando o acesso à Justiça Eclesiástica no Brasil. Nossa missão é simplificar o processo
                        de nulidade matrimonial, guiando fiéis católicos em cada etapa com clareza e segurança.
                    </p>
                    <div class="flex justify-center md:justify-start gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#c68e28] transition-colors group">
                            <i class="fab fa-facebook-f text-sm group-hover:text-brand-dark"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#c68e28] transition-colors group">
                            <i class="fab fa-instagram text-sm group-hover:text-brand-dark"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#c68e28] transition-colors group">
                            <i class="fab fa-youtube text-sm group-hover:text-brand-dark"></i>
                        </a>
                    </div>
                </div>

                {{-- Coluna 2: Links da Plataforma --}}
                <div class="md:col-span-3 space-y-6">
                    <h4 class="text-lg font-bold">Plataforma</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#simulacao" class="text-zinc-400 hover:text-[#c68e28] transition-colors">Faça seu
                                Simulado</a></li>
                        <li><a href="{{ route('grupos') }}"
                                class="text-zinc-400 hover:text-[#c68e28] transition-colors">Grupos de Casais</a></li>
                        <li><a href="{{ route('faq') }}"
                                class="text-zinc-400 hover:text-[#c68e28] transition-colors">Perguntas Frequentes</a>
                        </li>
                        <li><a href="{{ route('glossario') }}"
                                class="text-zinc-400 hover:text-[#c68e28] transition-colors">Glossário
                                Canônico</a></li>
                    </ul>
                </div>

                {{-- Coluna 3: Contato --}}
                <div class="md:col-span-4 space-y-6">
                    <h4 class="text-lg font-bold">Contato</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-center justify-center md:justify-start gap-3 text-zinc-400">
                            <svg class="w-5 h-5 text-[#c68e28] shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="break-all">contato@libelocanonico.com.br</span>
                        </li>
                        <!--
                        <li class="flex items-center justify-center md:justify-start gap-3 text-zinc-400">
                            <svg class="w-5 h-5 text-[#c68e28] shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            (11) 9999-9999
                        </li>
                        -->
                        <li class="flex items-center justify-center md:justify-start gap-3 text-zinc-400">
                            <svg class="w-5 h-5 text-[#c68e28] shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Brasília, DF - Brasil
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="border-white/10 mb-8">

            {{-- Bottom Footer --}}
            <div
                class="flex flex-col md:flex-row justify-between items-center gap-6 text-xs text-zinc-500 text-center">
                <p>© 2026 LibeloCanônico. Todos os direitos reservados.</p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#" class="hover:text-white transition-colors">Termos de Uso</a>
                    <a href="#" class="hover:text-white transition-colors">Política de Privacidade</a>
                    <a href="#" class="hover:text-white transition-colors">LGPD</a>
                </div>
            </div>

            {{-- Aviso Legal --}}
            <div class="mt-12 p-6 bg-white/5 rounded-2xl">
                <p class="text-[10px] md:text-[11px] text-zinc-500 text-center leading-relaxed">
                    <span class="font-bold text-zinc-400 uppercase tracking-tighter">Aviso Legal:</span> Esta
                    plataforma oferece orientação
                    educacional sobre o processo de nulidade matrimonial canônica e não substitui aconselhamento
                    jurídico profissional. As informações disponibilizadas são baseadas no Código de Direito Canônico
                    (CIC) vigente. Recomendamos consultar um advogado canonista ou pároco para casos específicos. A
                    decisão final sobre cada processo cabe exclusivamente ao tribunal eclesiástico competente.
                </p>
            </div>
        </div>
    </footer>
</x-layouts::public>
