<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseAPITraits
{
    public function responseSuccess($data, $message = "Successful", $status_code=200): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
        ], $status_code);
    }


    public function responseError($errors, $message = "Something went wrong", $status_code = 500): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors
        ], $status_code);
    }
}

