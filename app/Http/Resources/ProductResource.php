<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->encodeId($this->id),
            'sku' => $this->sku,
            'name' => $this->name,
            'price' => $this->price,
            'brand' => $this->brand,
            'stock' => $this->stock,
            'minimum_order' => $this->minimum_order,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'images' => $this->images,
            'sub_categories_id' => $this->encodeId($this->sub_categories_id),
            'store' => $this->store
        ];
    }
}
