<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GruposSeeder extends Seeder
{
    public function run(): void
    {
        $grupos = [
            [
                'nome' => 'Equipes de Nossa Senhora (ENS)',
                'descricao' => 'Movimento de espiritualidade conjugal que ajuda casais a viver plenamente o sacramento do matrimônio através de reuniões mensais e oração.',
                'contato' => 'https://www.ens.org.br',
                'uf' => null, // Nacional
                'tipo' => 'Movimento Eclesial',
            ],
            [
                'nome' => 'Encontro de Casais com Cristo (ECC)',
                'descricao' => 'Serviço da Igreja para evangelizar a família, focado em casais que buscam engajamento pastoral na paróquia.',
                'contato' => 'https://www.ecc-brasil.com.br',
                'uf' => null, // Nacional
                'tipo' => 'Serviço Pastoral',
            ],
            [
                'nome' => 'Pastoral Familiar (Regional Sul 1)',
                'descricao' => 'Atuação da Pastoral Familiar focada nas paróquias do estado de São Paulo, apoiando desde o pré-matrimônio até casos especiais.',
                'contato' => 'https://pastoralfamiliarsul1.org.br',
                'uf' => 'SP',
                'tipo' => 'Pastoral',
            ],
            [
                'nome' => 'Movimento de Famílias de Schoenstatt',
                'descricao' => 'Formação de famílias como "Santuários Vivos", com forte base na auto-educação e espiritualidade mariana.',
                'contato' => 'https://www.schoenstatt.org.br',
                'uf' => 'PR',
                'tipo' => 'Movimento Eclesial',
            ],
            [
                'nome' => 'Projeto Família (Comunidade Shalom)',
                'descricao' => 'Acompanhamento espiritual para casais e famílias com foco na renovação da experiência com Deus.',
                'contato' => 'https://comshalom.org',
                'uf' => 'CE',
                'tipo' => 'Comunidade Nova',
            ],
            [
                'nome' => 'Canaã - Comunidade Católica',
                'descricao' => 'Grupo focado em retiros para casais e restauração de matrimônios em crise.',
                'contato' => 'contato@canaa.org.br',
                'uf' => 'RJ',
                'tipo' => 'Associação',
            ],
        ];

        foreach ($grupos as $grupo) {
            DB::table('grupos')->updateOrInsert(
                ['nome' => $grupo['nome']],
                array_merge($grupo, ['created_at' => now(), 'updated_at' => now()])
            );
        }
    }
}
