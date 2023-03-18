<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'category_id',
        'description',
        'price',
        'image',
        'sale'
    ];

    public function getCurrentPrice() {
        $price = $this->price;
        $sale = $this->sale;
        $currentPrice = $price - ($price * $sale) / 100;
        return number_format($currentPrice, 2);
    }
}
