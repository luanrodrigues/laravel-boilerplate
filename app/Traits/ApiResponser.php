<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    /**
     * Return a success JSON response.
     */
    protected function success(int $code, array $data): JsonResponse
    {
        return response()->json(array_merge([
            'status' => 'success',
        ], $data), $code);
    }

    /**
     * Return an error JSON response.
     */
    protected function error(int $code, array $data = []): JsonResponse
    {
        return response()->json(array_merge([
            'status' => 'error',
        ], $data), $code);
    }
}
