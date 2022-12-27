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

    public function models()
    {
        return $this->morphedByMany(User::class, 'model', 'order_has_model', 'order_id');
    }
}
