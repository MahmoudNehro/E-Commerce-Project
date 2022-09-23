<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = [];
    protected $translatable = ['name', 'description'];

    protected $casts = [
        'specifications' => 'array'
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }
    public function productRatings(): HasMany
    {
        return $this->hasMany(ProductRating::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }
}
