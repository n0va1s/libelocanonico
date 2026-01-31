<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TribunaisSeeder extends Seeder
{
    public function run(): void
    {
        $tribunais = [
            [
                'nome' => 'Tribunal Eclesiástico Interdiocesano de Aparecida',
                'diocese' => 'Arquidiocese de Aparecida',
                'jurisdicao' => 'Aparecida, Lorena, São José dos Campos, Taubaté e Caraguatatuba',
                'endereco' => 'Av. Getúlio Vargas, 102 - Centro',
                'cidade' => 'Aparecida',
                'uf' => 'SP',
                'telefone' => '1231052426',
                'email' => 'tribunal@arquidioceseaparecida.org.br',
                'site' => 'https://www.a12.com/arquidiocese',
                'atendimento' => 'Segunda a Sexta, das 08h às 12h e das 13h30 às 17h30',
            ],
            [
                'nome' => 'Tribunal Eclesiástico Interdiocesano de São Paulo',
                'diocese' => 'Arquidiocese de São Paulo',
                'jurisdicao' => 'Região Metropolitana de São Paulo',
                'endereco' => 'Praça da Sé, 385 - 4º andar',
                'cidade' => 'São Paulo',
                'uf' => 'SP',
                'telefone' => '1131067350',
                'email' => 'tribunal@arquisp.org.br',
                'site' => 'https://arquisp.org.br',
                'atendimento' => 'Segunda a Sexta, das 09h às 17h (sem interrupção)',
            ],
            [
                'nome' => 'Tribunal Eclesiástico Interdiocesano de Brasília',
                'diocese' => 'Arquidiocese de Brasília',
                'jurisdicao' => 'Distrito Federal e entorno',
                'endereco' => 'Cúria Metropolitana de Brasília - Esplanada dos Ministérios',
                'cidade' => 'Brasília',
                'uf' => 'DF',
                'telefone' => '6132233540',
                'email' => 'tribunal@arqbrasilia.com.br',
                'site' => 'https://arqbrasilia.com.br',
                'atendimento' => 'Segunda a Sexta, das 08h às 12h e das 14h às 18h',
            ],
            [
                'nome' => 'Tribunal Eclesiástico de Olinda e Recife',
                'diocese' => 'Arquidiocese de Olinda e Recife',
                'jurisdicao' => 'Pernambuco e regiões circunvizinhas',
                'endereco' => 'Av. Rui Barbosa, 409 - Graças',
                'cidade' => 'Recife',
                'uf' => 'PE',
                'telefone' => '8132714270',
                'email' => 'tribunal@aor.org.br',
                'site' => 'https://arquidioceseolindarecife.org',
                'atendimento' => 'Segunda a Sexta, das 08h às 13h',
            ],
            [
                'nome' => 'Tribunal Eclesiástico Interdiocesano de Porto Alegre',
                'diocese' => 'Arquidiocese de Porto Alegre',
                'jurisdicao' => 'Rio Grande do Sul',
                'endereco' => 'Rua Espírito Santo, 95 - Centro Histórico',
                'cidade' => 'Porto Alegre',
                'uf' => 'RS',
                'telefone' => '5132213055',
                'email' => 'tribunal@arquipoa.com.br',
                'site' => 'https://arquipoa.com.br',
                'atendimento' => 'Segunda a Sexta, das 08h30 às 12h e das 13h30 às 17h30',
            ],
            [
                'nome' => 'Tribunal Eclesiástico do Rio de Janeiro',
                'diocese' => 'Arquidiocese de São Sebastião do Rio de Janeiro',
                'jurisdicao' => 'Estado do Rio de Janeiro',
                'endereco' => 'Rua Benjamin Constant, 23 - Glória',
                'cidade' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'telefone' => '2139162000',
                'email' => 'tribunal@arqrio.org.br',
                'site' => 'https://arqrio.org',
                'atendimento' => 'Segunda a Sexta, das 09h às 16h',
            ],
            [
                'nome' => 'Tribunal Eclesiástico Interdiocesano de Belo Horizonte',
                'diocese' => 'Arquidiocese de Belo Horizonte',
                'jurisdicao' => 'Minas Gerais (Região Central)',
                'endereco' => 'Av. Brasil, 2079 - Funcionários',
                'cidade' => 'Belo Horizonte',
                'uf' => 'MG',
                'telefone' => '3132693100',
                'email' => 'tribunal@arquidiocesebh.org.br',
                'site' => 'https://arquidiocesebh.org.br',
                'atendimento' => 'Segunda a Sexta, das 08h às 18h',
            ],
            [
                'nome' => 'Tribunal Eclesiástico Interdiocesano de Salvador',
                'diocese' => 'Arquidiocese de São Salvador da Bahia',
                'jurisdicao' => 'Bahia e Sergipe',
                'endereco' => 'Praça da Sé, s/n - Centro Histórico',
                'cidade' => 'Salvador',
                'uf' => 'BA',
                'telefone' => '7140096605',
                'email' => 'tribunal@arquidiocese-salvador.org.br',
                'site' => 'https://arquidiocesesalvador.org.br',
                'atendimento' => 'Segunda a Sexta, das 08h às 12h e das 13h às 17h',
            ],
            [
                'nome' => 'Tribunal Eclesiástico de Fortaleza',
                'diocese' => 'Arquidiocese de Fortaleza',
                'jurisdicao' => 'Ceará',
                'endereco' => 'Av. Dom Manuel, 339 - Centro',
                'cidade' => 'Fortaleza',
                'uf' => 'CE',
                'telefone' => '8533888700',
                'email' => 'tribunal@arquidiocesefortaleza.org.br',
                'site' => 'https://www.arquidiocesefortaleza.org.br',
                'atendimento' => 'Segunda a Sexta, das 08h às 12h e das 14h às 18h',
            ],
            [
                'nome' => 'Tribunal Eclesiástico de Belém',
                'diocese' => 'Arquidiocese de Belém do Pará',
                'jurisdicao' => 'Pará e Amapá',
                'endereco' => 'Av. Governador Magalhães Barata, 311 - Nazaré',
                'cidade' => 'Belém',
                'uf' => 'PA',
                'telefone' => '9121213700',
                'email' => 'tribunal@arquidiocesedebelem.org.br',
                'site' => 'https://arquidiocesedebelem.org.br',
                'atendimento' => 'Segunda a Sexta, das 08h às 12h e das 14h às 17h',
            ],
        ];

        foreach ($tribunais as $tribunal) {
            DB::table('tribunais')->updateOrInsert(
                ['nome' => $tribunal['nome']],
                array_merge($tribunal, ['created_at' => now(), 'updated_at' => now()])
            );
        }
    }
}
