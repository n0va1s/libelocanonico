<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagamento extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'pix_transaction_id', 'amount'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
