<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Canon extends Model
{
    use SoftDeletes;

    protected $table = 'canon'; //

    protected $fillable = [
        'canon',
        'categoria',
        'pergunta',
        'explicacao',
    ]; //

    /**
     * Um cânon pode estar presente em vários diagnósticos (respostas).
     */
    public function diagnosticos(): HasMany
    {
        return $this->hasMany(Diagnostico::class, 'canon_id');
    }
}
