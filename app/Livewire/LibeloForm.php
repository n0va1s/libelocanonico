<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class LibeloForm extends Component
{
    use WithFileUploads;

    public $step = 1;
    public $totalSteps = 6;

    // Etapa 1: Dados Pessoais
    public $nome, $nascimento, $nacionalidade, $profissao, $rg, $cpf, $telefone, $email, $endereco, $cidade, $uf, $cep;
    public $batismo_paroquia, $batismo_diocese, $batismo_data;

    // Etapa 2: Parte Contrária
    public $ex_nome, $ex_nascimento, $ex_telefone, $ex_email, $ex_endereco, $ex_paradeiro_desconhecido = false;

    // Etapa 3: Dados do Casamento
    public $casamento_data, $casamento_paroquia, $casamento_diocese;
    public $civil_data, $civil_sentenca_data, $civil_processo_num, $tem_filhos = false;

    // Etapa 4: Narrativa
    public $narrativa_namoro, $narrativa_lua_mel, $narrativa_convivencia, $narrativa_separacao;

    // Etapa 5: Fundamentação
    public $canones_selecionados = [];
    public $observacoes_adicionais;

    // Etapa 6: Testemunhas (Array dinâmico)
    public $testemunhas = [
        ['nome' => '', 'endereco' => '', 'telefone' => '', 'relacao' => ''],
        ['nome' => '', 'endereco' => '', 'telefone' => '', 'relacao' => ''],
    ];

    public function nextStep()
    {
        $this->validateStep();
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function addTestemunha()
    {
        if (count($this->testemunhas) < 5) {
            $this->testemunhas[] = ['nome' => '', 'endereco' => '', 'telefone' => '', 'relacao' => ''];
        }
    }

    private function validateStep()
    {
        // Adicione aqui as regras de validação específicas por etapa
    }

    public function render()
    {
        return view('livewire.libelo-form');
    }
}
