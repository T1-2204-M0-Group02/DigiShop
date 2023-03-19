<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getCurrentPrice() {
        $price = $this->price;
        $sale = $this->sale;
        $currentPrice = $price - ($price * $sale) / 100;
        return $currentPrice;
    }

    public function scopePriceBetween(Builder $query, ...$dates) : Builder
    {
        return $query->whereBetween('price', array($dates[0], $dates[1]));
    }
}
