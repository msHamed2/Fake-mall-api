<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Mapi\Easyapi\Models\ApiModel;

class Carts extends ApiModel
{
    use HasFactory;

    protected $table = "carts";
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $fillable = [
        "user_id",
        "created_at",
        "updated_at"
    ];
    protected $allowedFilters = ['id','user_id'];
    protected $allowedRelationsToLoad = [
        'cartProducts'=>['id','cart_id','product_id',],
        'user'=>['id','name','email']
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    function cartProducts(): HasMany
    {
        return $this->HasMany(CartProducts::class,'cart_id');
    }
}
