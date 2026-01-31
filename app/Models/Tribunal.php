<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Tribunal extends Model
{
    use SoftDeletes;

    protected $table = 'tribunais';

    protected $guarded = ['id'];

    /**
     * Scope para buscar tribunais de um estado específico.
     * Aproveita o índice criado na coluna 'uf'.
     */
    public function scopePorUF(Builder $query, string $uf): void
    {
        $query->where('uf', strtoupper($uf));
    }

    /**
     * Retorna o endereço completo formatado.
     */
    public function getEnderecoCompleto(): string
    {
        return "{$this->endereco}, {$this->cidade} - {$this->uf}, CEP: {$this->cep}";
    }
}
