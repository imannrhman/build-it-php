<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\ResponseAPITraits;
use Illuminate\Http\Request;

class RefreshTokenController extends Controller
{
    use ResponseAPITraits;

    public function refresh_token(Request $request): \Illuminate\Http\JsonResponse
    {
        return $this->responseSuccess(
            [
                'user' => auth()->user(),
                'type' => 'Bearer',
                'access_token' => auth()->refresh(),
                'expires_in' => auth('api')->factory()->getTTL() * 60,
            ],
        );
    }

}
