<?php
namespace App\Enums;

enum OrderStatusEnum: int {
    case New = 0;
    case Hold = 1;
    case Delivered = 2;
    case Cancelled = 3;
    case Failed = 4;
}