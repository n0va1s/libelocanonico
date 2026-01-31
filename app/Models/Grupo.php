<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Grupo extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    /**
     * Scope para filtrar grupos por estado ou nacionais.
     * Útil para o componente de busca de grupos.
     */
    public function scopePorUF(Builder $query, ?string $uf): void
    {
        $query->where(function ($q) use ($uf) {
            $q->where('uf', $uf)
                ->orWhereNull('uf'); // Inclui grupos de alcance nacional
        });
    }

    /**
     * Scope para filtrar por tipo (ECC, ENS, Pastoral, etc).
     */
    public function scopePorTipo(Builder $query, string $tipo): void
    {
        $query->where('tipo', $tipo);
    }
}
