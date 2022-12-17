<?php

namespace App\Traits;

use Hashids\Hashids;
use Illuminate\Http\JsonResponse;

trait HashIdTraits
{
    public function encodeId($id): string
    {
        $hashids = new Hashids('id', 10);
        return $hashids->encode($id);
    }

    public function decodeId($id): array
    {
        $hashids = new Hashids('id', 10);
        return $hashids->decode($id);
    }

}

