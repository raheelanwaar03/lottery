<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchasedCoins extends Model
{
    use HasFactory;

    public function userData(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
