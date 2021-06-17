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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $target)
    {
        if ($target != '') {
            return $query->where('description', 'like', "%$target%")
            ->orWhereHas(
                'user',
                function ($query) use ($target) {
                    $query->where('name', 'like', '%'.$target.'%')
                        ->orWhere('email', 'like', '%'.$target.'%');
                }
            )
            ->orWhereHas(
                'products',
                function ($query) use ($target) {
                    $query->where('name', 'like', '%'.$target.'%')
                        ->orWhere('description', 'like', '%'.$target.'%');
                }
            )
            ->orWhereHas(
                'shippingAddress',
                function ($query) use ($target) {
                    $query->where('direction', 'like', '%'.$target.'%')
                        ->orWhere('commune', 'like', '%'.$target.'%')
                        ->orWhere('region', 'like', '%'.$target.'%');
                }
            );
        }

    }
}
