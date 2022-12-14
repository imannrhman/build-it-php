<?php

namespace App\Http\Resources;

use Hashids\Hashids;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user' => new UserResource($this[0]),
            'type' => 'Bearer',
            'access_token' => $this[1],
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ];
    }
}
