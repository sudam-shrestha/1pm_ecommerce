<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopProfile extends Model
{
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }
}
