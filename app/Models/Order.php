<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function shippingAddress() {
        return $this->hasOne(ShippingAddress::class);
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id')->withPivot('price', 'quantity');
    }

    public function orderProduct() {
        return $this->hasMany(OrderProduct::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
