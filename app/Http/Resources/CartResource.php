<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends Resource
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
            "id" => $this->encodeId($this->id),
            "total_qty" => $this->total_qty,
            "active" => boolval($this->active),
            "products" => ProductResource::collection($this->products),
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
