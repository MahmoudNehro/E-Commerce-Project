<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductDetail extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function refunding(): BelongsTo
    {
        return $this->belongsTo(Refunding::class);
    }
}
