<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diagnostico extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'canon_id', 'resposta'];

    protected $casts = [
        'resposta' => 'boolean',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function canon(): BelongsTo
    {
        return $this->belongsTo(Canon::class);
    }
}
