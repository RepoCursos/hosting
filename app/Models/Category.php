<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name'
    ];

    // Relacion uno a muchos:Ej la Categoria tiene muchos productos
    // Ver video https://www.youtube.com/watch?v=7B_Sbqq62Bc&list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&index=9 
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
