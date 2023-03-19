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
        'status' => OrderStatusEnum::class,
        'shipping_time' => 'datetime'
    ];

    public function details() {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function total(): float {
        $total = 0;
        for ($i = 0; $i < count($this->details); $i++) {
            $total += $this->details[$i]->subTotal();
        }
        return $total;
    }

    public function getStatusString(OrderStatusEnum $status): string {
        return $status->name;
    } 
}
