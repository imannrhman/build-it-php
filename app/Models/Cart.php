<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_carts', 'cart_id',);
    }

    public function user()
    {
        return$this->belongsTo(User::class, 'user_id');
    }
}
