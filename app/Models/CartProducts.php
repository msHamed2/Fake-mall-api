<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mapi\Easyapi\Models\ApiModel;

class CartProducts extends ApiModel
{
    use HasFactory;
    protected $table='cart_products';
    protected $fillable=['cart_id','product_id','quantity'];
    protected $allowedFilters=['id','cart_id'];
}
