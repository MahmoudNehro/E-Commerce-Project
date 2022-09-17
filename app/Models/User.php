<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function refundings(): HasMany
    {
        return $this->hasMany(Refunding::class);
    }
    public function ratingReports(): HasMany
    {
        return $this->hasMany(RatingReport::class);
    }
    public function productRatings(): HasMany
    {
        return $this->hasMany(ProductRating::class);
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
    public function contactUs(): HasMany
    {
        return $this->hasMany(ContactUs::class);
    }
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }
}
