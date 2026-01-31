<?php

namespace App\Models;

use App\Enums\RelacaoTestemunha;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LibeloTestemunha extends Model
{
    protected $fillable = [
        'libelo_id',
        'testemunha_nome',
        'testemunha_endereco',
        'testemunha_telefone',
        'testemunha_relacao_casal'
    ];

    protected $casts = [
        'testemunha_relacao_casal' => RelacaoTestemunha::class,
    ];

    public function libelo(): BelongsTo
    {
        return $this->belongsTo(Libelo::class);
    }
}
