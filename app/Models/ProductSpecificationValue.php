<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecificationValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specification_title_id'
    ];


    public function specification_title()
    {
        return $this->belongsTo(ProductSpecificationTitle::class);
    }
}
