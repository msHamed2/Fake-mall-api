<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Mapi\Easyapi\Models\ApiModel;

class Address extends ApiModel
{
    use HasFactory;

    protected $table = "address";
    protected $fillable = [
        "city",
        "street",
        "zipcode",
        "long",
        "lat",
        "created_at",
        "updated_at"
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
