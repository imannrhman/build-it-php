<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseAPITraits
{
    public function responseSuccess($data, $message = "Successful"): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
        ]);
    }


    public function responseError($errors, $message = "Something went wrong"): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors
        ]);
    }
}

