<?php

namespace App\Http\Resources;

use Hashids\Hashids;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class AuthResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
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
