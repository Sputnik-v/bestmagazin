<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'imagePath'
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}
