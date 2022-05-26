<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Mapi\Easyapi\Models\ApiUser;

class User extends ApiUser
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];
    protected $allowedRelationsToLoad=[
        "address"=>['id',"city",'street','zipcode','long','lat','user_id']
    ];
     protected $allowedFilters=["id"];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    function address(): HasOne
    {
        return $this->hasOne(Address::class,'user_id');
    }
    function carts(): HasMany
    {
        return $this->hasMany(Carts::class);
    }
}
