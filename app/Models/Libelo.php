<?php

namespace App\Models;

use App\Enums\StatusLibelo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Libelo extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $casts = [
        'situacao' => StatusLibelo::class,
        'proponente_dat_nascimento' => 'date',
        'proponente_batismo_data' => 'date',
        'parte_data_nascimento' => 'date',
        'casamento_religioso_data' => 'date',
        'casamento_civil_data' => 'date',
        'divorcio_sentenca_data' => 'date',
        'parte_paradeiro_desconhecido' => 'boolean',
        'tem_filhos' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function testemunhas(): HasMany
    {
        return $this->hasMany(LibeloTestemunha::class);
    }

    public function canones(): BelongsToMany
    {
        return $this->belongsToMany(Canon::class, 'libelo_canones');
    }
}
