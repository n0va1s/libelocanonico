<?php

namespace Database\Seeders;

use App\Models\Canon;
use Illuminate\Database\Seeder;

class CanonSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // --- GRUPO: DEFEITOS DE CONSENTIMENTO (PSICOLÓGICO) ---
            [
                'canon' => 'CIC 1095, §1',
                'categoria' => 'Capacidade',
                'pergunta' => 'Algum dos cônjuges apresentava transtornos psicológicos graves (depressão severa, transtorno bipolar, esquizofrenia) no momento do casamento?',
                'explicacao' => 'Falta de uso suficiente da razão no momento do consentimento por causa psíquica grave.',
            ],
            [
                'canon' => 'CIC 1095, §2',
                'categoria' => 'Discernimento',
                'pergunta' => 'No momento do casamento, você ou seu cônjuge demonstravam maturidade emocional e psicológica para assumir as obrigações do matrimônio?',
                'explicacao' => 'Avalia a capacidade psicológica de discernir as obrigações matrimoniais essenciais como fidelidade, indissolubilidade e abertura à prole.',
            ],
            [
                'canon' => 'CIC 1095, §3',
                'categoria' => 'Incapacidade Psíquica',
                'pergunta' => 'Algum dos cônjuges era incapaz de assumir as obrigações essenciais do matrimônio (como a fidelidade ou vida em comum) por causas de natureza psíquica?',
                'explicacao' => 'Incapazes de assumir as obrigações essenciais do matrimônio por causas de natureza psíquica.',
            ],

            // --- GRUPO: IMPEDIMENTOS DIRIMENTES ---
            [
                'canon' => 'Cân. 1083',
                'categoria' => 'Idade Mínima',
                'pergunta' => 'Na data do casamento, o homem tinha menos de 16 anos ou a mulher menos de 14 anos?',
                'explicacao' => '§1: Homem <16 ou mulher <14 são incapazes. §2: A Conferência Episcopal pode elevar essa idade.',
            ],
            [
                'canon' => 'Cân. 1086',
                'categoria' => 'Vínculo Precedente',
                'pergunta' => 'No momento da união, um dos cônjuges já era casado civilmente ou religiosamente com outra pessoa viva?',
                'explicacao' => 'Impede novo casamento enquanto o vínculo anterior for considerado válido pela Igreja.',
            ],
            [
                'canon' => 'Cân. 1087',
                'categoria' => 'Ordens Sacras',
                'pergunta' => 'Um dos cônjuges era padre, diácono ou possuía ordens sacras no momento do matrimônio?',
                'explicacao' => 'O sacramento da ordem impede validamente o casamento.',
            ],
            [
                'canon' => 'Cân. 1088',
                'categoria' => 'Voto Público',
                'pergunta' => 'Algum dos cônjuges havia feito voto perpétuo de castidade em um instituto religioso?',
                'explicacao' => 'Voto público perpétuo de castidade em instituto religioso é impedimento dirimente.',
            ],
            [
                'canon' => 'Cân. 1090',
                'categoria' => 'Disparidade de Culto',
                'pergunta' => 'Houve o casamento entre uma pessoa batizada na Igreja Católica e outra não-batizada sem a dispensa do Bispo?',
                'explicacao' => 'O casamento com não-batizado é inválido, salvo se houver dispensa da autoridade competente.',
            ],
            [
                'canon' => 'Cân. 1091',
                'categoria' => 'Rapto',
                'pergunta' => 'O casamento ocorreu sob situação de rapto ou retenção violenta de um dos cônjuges?',
                'explicacao' => 'O rapto impede o casamento até que a pessoa seja posta em liberdade e em lugar seguro.',
            ],
            [
                'canon' => 'Cân. 1092',
                'categoria' => 'Consanguinidade',
                'pergunta' => 'Os cônjuges possuem parentesco próximo de sangue (pais, filhos, irmãos ou primos de primeiro grau)?',
                'explicacao' => 'Linha reta em qualquer grau e linha colateral até o 4º grau (primos irmãos) impede o matrimônio.',
            ],
            [
                'canon' => 'Cân. 1093',
                'categoria' => 'Afinidade',
                'pergunta' => 'Havia parentesco por afinidade (como sogros ou enteados) em linha reta entre os cônjuges?',
                'explicacao' => 'A afinidade na linha reta torna o matrimônio inválido para sempre.',
            ],
            [
                'canon' => 'Cân. 1094',
                'categoria' => 'Clandestinidade',
                'pergunta' => 'O casamento foi realizado sem a presença de um padre/diácono autorizado ou sem as duas testemunhas exigidas?',
                'explicacao' => 'Casamento realizado sem a forma canônica (assistente e testemunhas) é inválido.',
            ],

            // --- GRUPO: VÍCIOS DE CONSENTIMENTO ---
            [
                'canon' => 'Cân. 1096',
                'categoria' => 'Ignorância',
                'pergunta' => 'Algum dos cônjuges desconhecia que o matrimônio é uma união permanente entre homem e mulher para a procriação?',
                'explicacao' => 'A ignorância de que o matrimônio é uma união estável ordenada à prole torna o consentimento inválido.',
            ],
            [
                'canon' => 'Cân. 1097',
                'categoria' => 'Erro',
                'pergunta' => 'Houve erro sobre a identidade da pessoa ou sobre uma qualidade essencial que foi determinante para o seu "sim"?',
                'explicacao' => '§1: Erro sobre a pessoa. §2: Erro sobre qualidade essencial da pessoa diretamente visada.',
            ],
            [
                'canon' => 'Cân. 1098',
                'categoria' => 'Dolo (Engano)',
                'pergunta' => 'Você foi enganado dolosamente sobre alguma qualidade grave do cônjuge para que aceitasse o casamento?',
                'explicacao' => 'Engano fabricado para obter o consentimento sobre qualidade que perturba a vida conjugal.',
            ],
            [
                'canon' => 'Cân. 1099',
                'categoria' => 'Simulação Parcial',
                'pergunta' => 'Houve erro determinante sobre a unidade (fidelidade) ou indissolubilidade do matrimônio por parte de algum cônjuge?',
                'explicacao' => 'Erro sobre propriedades essenciais não vicia se não for determinante da vontade.',
            ],
            [
                'canon' => 'Cân. 1101',
                'categoria' => 'Exclusão de Bens',
                'pergunta' => 'No momento do "sim", algum dos cônjuges excluiu positivamente a vontade de ter filhos, de ser fiel ou da duração perpétua do vínculo?',
                'explicacao' => 'Simulação total ou parcial (exclusão de prole, fidelidade ou indissolubilidade).',
            ],
            [
                'canon' => 'Cân. 1102',
                'categoria' => 'Condição',
                'pergunta' => 'O casamento foi realizado sob alguma condição de futuro ou condição impossível de se realizar?',
                'explicacao' => 'Condições futuras, ilícitas ou impossíveis tornam o consentimento inválido.',
            ],
            [
                'canon' => 'Cân. 1103',
                'categoria' => 'Força ou Medo',
                'pergunta' => 'O casamento ocorreu por causa de violência física ou medo grave aplicado externamente para forçar o consentimento?',
                'explicacao' => 'Violência ou medo grave externo do qual a pessoa não possa se livrar senão escolhendo o matrimônio.',
            ],

            // --- GRUPO: FINALIZAÇÃO E RATIFICAÇÃO ---
            [
                'canon' => 'Cân. 1105',
                'categoria' => 'Não Consumado',
                'pergunta' => 'O casamento nunca chegou a ser consumado pelo ato sexual após a celebração?',
                'explicacao' => 'O matrimônio não consumado pode ser dissolvido pela autoridade pontifícia ou por morte.',
            ],
            [
                'canon' => 'Cân. 1106 / 1107',
                'categoria' => 'Ratificação',
                'pergunta' => 'A nulidade inicial foi sanada por um novo consentimento posterior ou ela persiste até hoje?',
                'explicacao' => 'A nulidade persiste até que o consentimento seja validamente renovado ou provado o contrário.',
            ],
        ];

        foreach ($data as $item) {
            Canon::create($item);
        }
    }
}
