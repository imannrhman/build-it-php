<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecificationTitle extends Model
{
    use HasFactory;

    public function specification()
    {
        return $this->belongsTo(ProductSpecification::class);
    }

    public function specificationTitleMorph()
    {
        return $this->morphTo();
    }


}
