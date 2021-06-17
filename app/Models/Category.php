<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_products', 'category_id', 'product_id');
    }

    public function scopeSearch($query, $target)
    {
        if ($target != '') {
            return $query->where('name', 'like', "%$target%")
            ->orWhereHas(
                'products',
                function ($query) use ($target) {
                    $query->where('name', 'like', '%'.$target.'%');
                }
            );
        }
    }
}
