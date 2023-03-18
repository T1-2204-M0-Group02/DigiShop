<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['user_id', 'status', 'order_date', 'shipping_name', 'shipping_time', 
        'shipping_phone', 'shipping_email', 'shipping_address'];

    protected $casts = [
        'status' => OrderStatusEnum::class
    ];

    public function details() {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
