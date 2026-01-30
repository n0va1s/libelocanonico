<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Canon extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * O nome da tabela associada ao modelo.
     * (Obrigatório pois você definiu no singular na migration)
     *
     * @var string
     */
    protected $table = 'canon';

    /**
     * Atributos que podem ser preenchidos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'canon_id',
        'is_true',
    ];

    /**
     * Conversão de tipos de atributos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_true' => 'boolean',
    ];

    /**
     * Relacionamento: Resposta pertence a um Usuário.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacionamento: Resposta pertence a uma Pergunta/Cânon.
     * (Assumindo que sua model de perguntas se chama QuizQuestion)
     */
    public function canon(): BelongsTo
    {
        return $this->belongsTo(Canon::class, 'canon_id');
    }
}
