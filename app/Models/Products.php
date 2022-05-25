<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mapi\Easyapi\Models\ApiModel;

class Products extends ApiModel
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        "title",
        "price",
        "description",
        "image",
        "category",
        "created_at",
        "updated_at",
        "rating",
        "count"
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $allowedFilters=['id','category'];
}
