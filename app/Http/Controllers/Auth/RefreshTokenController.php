<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Traits\ResponseAPITraits;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RefreshTokenController extends Controller
{

    public function refresh_token(Request $request): JsonResponse
    {
        $token = auth('api')->refresh();
        return $this->responseSuccess(
            [
                'user' => new UserResource(auth('api')->setToken($token)->user()),
                'type' => 'Bearer',
                'access_token' => $token,
                'expires_in' => auth('api')->factory()->getTTL() * 60,
            ],
        );
    }

}
