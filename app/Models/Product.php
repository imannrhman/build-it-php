<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function spesifications_value() {
        return $this->belongsToMany(ProductSpecificationValue::class, 'product_specification_value_links', 'product_id', 'specification_value_id');
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }

    public function sub_categories() {
        return $this->belongsTo(SubCategory::class);
    }


    public function store() {
        return $this->belongsTo(Store::class);
    }


}
