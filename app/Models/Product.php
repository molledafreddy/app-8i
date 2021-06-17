<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_products', 'product_id', 'order_id')->withPivot('price', 'quantity');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products', 'product_id', 'category_id');
    }

    public function scopeSearch($query, $target)
    {
        if ($target != '') {
            return $query->where('name', 'like', "%$target%")
            ->orWhere('description', 'like', "%$target%")
            ->orWhereHas(
                'categories',
                function ($query) use ($target) {
                    $query->where('name', 'like', '%'.$target.'%');
                }
            );
        }
    }
}
