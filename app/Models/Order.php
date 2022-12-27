<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'price',
        'status',
    ];

    public function products()
    {
        return $this->belongsToMany(Order::class, 'order_id', 'product_id', 'order_id' );
    }
}
