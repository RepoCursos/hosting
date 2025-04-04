<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'urlfoto',
        'name',
        'price',
        'stock',
        'category_id'
    ];

    // Relacion uno a muchos:Ej varios productos pertenecen a una categoria
    // Ver video https://www.youtube.com/watch?v=7B_Sbqq62Bc&list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&index=9
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
