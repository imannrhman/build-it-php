<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    use HasFactory;

    public function specificationTitles()
    {
        return $this->hasMany(ProductSpecificationTitle::class, 'specification_id');
    }
}
