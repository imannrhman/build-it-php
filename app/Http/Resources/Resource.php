<?php

namespace App\Http\Resources;


use App\Traits\HashIdTraits;
use Illuminate\Http\Resources\Json\JsonResource;

class Resource extends JsonResource
{
    use HashIdTraits;
}
