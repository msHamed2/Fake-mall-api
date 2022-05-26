<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiCount extends Model
{
    use HasFactory;
    protected $table="api_count";
    protected $fillable=['count'];
}
