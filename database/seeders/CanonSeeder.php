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
                'category' => 'Capacidade',
                'question' => 'Algum dos cônjuges apresentava transtornos psicológicos graves (depressão severa, transtorno bipolar, esquizofrenia) no momento do casamento?',
                'explanation' => 'Falta de uso suficiente da razão no momento do consentimento por causa psíquica grave.',
            ],
            [
                'canon' => 'CIC 1095, §2',
                'category' => 'Discernimento',
                'question' => 'No momento do casamento, você ou seu cônjuge demonstravam maturidade emocional e psicológica para assumir as obrigações do matrimônio?',
                'explanation' => 'Avalia a capacidade psicológica de discernir as obrigações matrimoniais essenciais como fidelidade, indissolubilidade e abertura à prole.',
            ],
            [
                'canon' => 'CIC 1095, §3',
                'category' => 'Incapacidade Psíquica',
                'question' => 'Algum dos cônjuges era incapaz de assumir as obrigações essenciais do matrimônio (como a fidelidade ou vida em comum) por causas de natureza psíquica?',
                'explanation' => 'Incapazes de assumir as obrigações essenciais do matrimônio por causas de natureza psíquica.',
            ],

            // --- GRUPO: IMPEDIMENTOS DIRIMENTES ---
            [
                'canon' => 'Cân. 1083',
                'category' => 'Idade Mínima',
                'question' => 'Na data do casamento, o homem tinha menos de 16 anos ou a mulher menos de 14 anos?',
                'explanation' => '§1: Homem <16 ou mulher <14 são incapazes. §2: A Conferência Episcopal pode elevar essa idade.',
            ],
            [
                'canon' => 'Cân. 1086',
                'category' => 'Vínculo Precedente',
                'question' => 'No momento da união, um dos cônjuges já era casado civilmente ou religiosamente com outra pessoa viva?',
                'explanation' => 'Impede novo casamento enquanto o vínculo anterior for considerado válido pela Igreja.',
            ],
            [
                'canon' => 'Cân. 1087',
                'category' => 'Ordens Sacras',
                'question' => 'Um dos cônjuges era padre, diácono ou possuía ordens sacras no momento do matrimônio?',
                'explanation' => 'O sacramento da ordem impede validamente o casamento.',
            ],
            [
                'canon' => 'Cân. 1088',
                'category' => 'Voto Público',
                'question' => 'Algum dos cônjuges havia feito voto perpétuo de castidade em um instituto religioso?',
                'explanation' => 'Voto público perpétuo de castidade em instituto religioso é impedimento dirimente.',
            ],
            [
                'canon' => 'Cân. 1090',
                'category' => 'Disparidade de Culto',
                'question' => 'Houve o casamento entre uma pessoa batizada na Igreja Católica e outra não-batizada sem a dispensa do Bispo?',
                'explanation' => 'O casamento com não-batizado é inválido, salvo se houver dispensa da autoridade competente.',
            ],
            [
                'canon' => 'Cân. 1091',
                'category' => 'Rapto',
                'question' => 'O casamento ocorreu sob situação de rapto ou retenção violenta de um dos cônjuges?',
                'explanation' => 'O rapto impede o casamento até que a pessoa seja posta em liberdade e em lugar seguro.',
            ],
            [
                'canon' => 'Cân. 1092',
                'category' => 'Consanguinidade',
                'question' => 'Os cônjuges possuem parentesco próximo de sangue (pais, filhos, irmãos ou primos de primeiro grau)?',
                'explanation' => 'Linha reta em qualquer grau e linha colateral até o 4º grau (primos irmãos) impede o matrimônio.',
            ],
            [
                'canon' => 'Cân. 1093',
                'category' => 'Afinidade',
                'question' => 'Havia parentesco por afinidade (como sogros ou enteados) em linha reta entre os cônjuges?',
                'explanation' => 'A afinidade na linha reta torna o matrimônio inválido para sempre.',
            ],
            [
                'canon' => 'Cân. 1094',
                'category' => 'Clandestinidade',
                'question' => 'O casamento foi realizado sem a presença de um padre/diácono autorizado ou sem as duas testemunhas exigidas?',
                'explanation' => 'Casamento realizado sem a forma canônica (assistente e testemunhas) é inválido.',
            ],

            // --- GRUPO: VÍCIOS DE CONSENTIMENTO ---
            [
                'canon' => 'Cân. 1096',
                'category' => 'Ignorância',
                'question' => 'Algum dos cônjuges desconhecia que o matrimônio é uma união permanente entre homem e mulher para a procriação?',
                'explanation' => 'A ignorância de que o matrimônio é uma união estável ordenada à prole torna o consentimento inválido.',
            ],
            [
                'canon' => 'Cân. 1097',
                'category' => 'Erro',
                'question' => 'Houve erro sobre a identidade da pessoa ou sobre uma qualidade essencial que foi determinante para o seu "sim"?',
                'explanation' => '§1: Erro sobre a pessoa. §2: Erro sobre qualidade essencial da pessoa diretamente visada.',
            ],
            [
                'canon' => 'Cân. 1098',
                'category' => 'Dolo (Engano)',
                'question' => 'Você foi enganado dolosamente sobre alguma qualidade grave do cônjuge para que aceitasse o casamento?',
                'explanation' => 'Engano fabricado para obter o consentimento sobre qualidade que perturba a vida conjugal.',
            ],
            [
                'canon' => 'Cân. 1099',
                'category' => 'Simulação Parcial',
                'question' => 'Houve erro determinante sobre a unidade (fidelidade) ou indissolubilidade do matrimônio por parte de algum cônjuge?',
                'explanation' => 'Erro sobre propriedades essenciais não vicia se não for determinante da vontade.',
            ],
            [
                'canon' => 'Cân. 1101',
                'category' => 'Exclusão de Bens',
                'question' => 'No momento do "sim", algum dos cônjuges excluiu positivamente a vontade de ter filhos, de ser fiel ou da duração perpétua do vínculo?',
                'explanation' => 'Simulação total ou parcial (exclusão de prole, fidelidade ou indissolubilidade).',
            ],
            [
                'canon' => 'Cân. 1102',
                'category' => 'Condição',
                'question' => 'O casamento foi realizado sob alguma condição de futuro ou condição impossível de se realizar?',
                'explanation' => 'Condições futuras, ilícitas ou impossíveis tornam o consentimento inválido.',
            ],
            [
                'canon' => 'Cân. 1103',
                'category' => 'Força ou Medo',
                'question' => 'O casamento ocorreu por causa de violência física ou medo grave aplicado externamente para forçar o consentimento?',
                'explanation' => 'Violência ou medo grave externo do qual a pessoa não possa se livrar senão escolhendo o matrimônio.',
            ],

            // --- GRUPO: FINALIZAÇÃO E RATIFICAÇÃO ---
            [
                'canon' => 'Cân. 1105',
                'category' => 'Não Consumado',
                'question' => 'O casamento nunca chegou a ser consumado pelo ato sexual após a celebração?',
                'explanation' => 'O matrimônio não consumado pode ser dissolvido pela autoridade pontifícia ou por morte.',
            ],
            [
                'canon' => 'Cân. 1106 / 1107',
                'category' => 'Ratificação',
                'question' => 'A nulidade inicial foi sanada por um novo consentimento posterior ou ela persiste até hoje?',
                'explanation' => 'A nulidade persiste até que o consentimento seja validamente renovado ou provado o contrário.',
            ],
        ];

        foreach ($data as $item) {
            Canon::create($item);
        }
    }
}
