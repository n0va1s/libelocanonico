<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.public')] class extends Component {
    public int $step = 1;
    public array $answers = [];
    public bool $isFinished = false;

    public function questions()
    {
        return [
            1 => ['q' => 'Houve exclusão deliberada de filhos por uma das partes antes do casamento?', 'vicio' => 'Cân. 1101, §2'],
            2 => ['q' => 'Alguma das partes casou sob coação ou medo grave imposto por terceiros?', 'vicio' => 'Cân. 1103'],
            3 => ['q' => 'Houve erro sobre uma qualidade substancial da pessoa, descoberta após o rito?', 'vicio' => 'Cân. 1097'],
            4 => ['q' => 'Uma das partes casou escondendo uma condition grave (ex: esterilidade, doença mental)?', 'vicio' => 'Cân. 1098'],
            5 => ['q' => 'Houve exclusão total da fidelidade (intenção de manter outros relacionamentos)?', 'vicio' => 'Cân. 1101'],
            6 => ['q' => 'Uma das partes excluiu a indissolubilidade (casou pensando "se não der certo, separo")?', 'vicio' => 'Cân. 1101'],
            7 => ['q' => 'Houve incapacidade de assumir obrigações por causas de natureza psíquica?', 'vicio' => 'Cân. 1095, 3º'],
            8 => ['q' => 'Faltava o uso suficiente da razão por uma das partes no momento do consentimento?', 'vicio' => 'Cân. 1095, 1º'],
            9 => ['q' => 'Houve simulação total do consentimento (casar apenas por interesse externo)?', 'vicio' => 'Cân. 1101'],
            10 => ['q' => 'O casamento foi realizado sob condição futura (ex: "caso se você conseguir tal emprego")?', 'vicio' => 'Cân. 1102'],
            11 => ['q' => 'Houve grave falta de discrição de juízo sobre os direitos e deveres matrimoniais?', 'vicio' => 'Cân. 1095, 2º'],
            12 => ['q' => 'Houve algum impedimento de consanguinidade ou afinidade não dispensado?', 'vicio' => 'Cân. 1091'],
        ];
    }

    public function nextStep($answer)
    {
        $this->answers[$this->step] = $answer;

        if ($this->step < 12) {
            $this->step++;
        } else {
            $this->finish();
        }
    }

    public function finish()
    {
        $this->isFinished = true;
        $temVicio = in_array('sim', $this->answers);

        return $this->redirect(route('resultado', ['viabilidade' => $temVicio ? 'alta' : 'analise']), navigate: true);
    }
}; ?>

<div class="py-12 bg-brand min-h-screen">
    <div class="max-w-3xl mx-auto p-4 md:p-8">
        {{-- Barra de Progresso --}}
        <div class="mb-10">
            <div class="flex justify-between items-end mb-2">
                <span class="text-xs font-bold text-[#c68e28] uppercase tracking-widest">Questionário de
                    Viabilidade</span>
                <span class="text-sm font-bold text-zinc-400">{{ $step }}/12</span>
            </div>
            <div class="w-full h-1.5 bg-zinc-100 rounded-full overflow-hidden">
                <div class="h-full bg-[#c68e28] transition-all duration-500 ease-out"
                    style="width: {{ ($step / 12) * 100 }}%"></div>
            </div>
        </div>

        {{-- Área de Conteúdo --}}
        <div class="relative min-h-[350px]">
            {{-- Skeleton Loading --}}
            <div wire:loading.flex class="absolute inset-0 flex-col gap-6 animate-pulse">
                <div class="h-12 bg-zinc-100 rounded-2xl w-5/6"></div>
                <div class="h-24 bg-zinc-50 rounded-3xl w-full"></div>
                <div class="h-24 bg-zinc-50 rounded-3xl w-full"></div>
            </div>

            {{-- Pergunta --}}
            <div wire:loading.remove class="animate-fade-in">
                <div class="mb-10">
                    <h2 class="text-3xl md:text-4xl font-bold text-brand-dark leading-tight">
                        {{ $this->questions()[$step]['q'] }}
                    </h2>
                    <p class="mt-4 text-zinc-400 text-sm italic">
                        Referência Canônica: {{ $this->questions()[$step]['vicio'] }}
                    </p>
                </div>

                <div class="grid gap-4">
                    <button wire:click="nextStep('sim')"
                        class="group flex items-center justify-between p-8 bg-white border-2 border-zinc-100 rounded-[2rem] hover:border-[#c68e28] transition-all text-left shadow-sm">
                        <div>
                            <span class="block font-bold text-brand-dark text-lg">Sim, isso ocorreu</span>
                            <span class="text-sm text-zinc-500">Este fato esteve presente antes ou no rito.</span>
                        </div>
                    </button>

                    <button wire:click="nextStep('nao')"
                        class="group flex items-center justify-between p-8 bg-white border-2 border-zinc-100 rounded-[2rem] hover:border-zinc-800 transition-all text-left shadow-sm">
                        <div>
                            <span class="block font-bold text-zinc-500 text-lg">Não se aplica</span>
                            <span class="text-sm text-zinc-400">Não houve este tipo de ocorrência.</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
