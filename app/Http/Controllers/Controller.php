<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function getJsonResponse($messageKey, $data = null,  $code = 200, $exception = null, $replace = []): JsonResponse
    {
        $response = [
            'message' => trans('messages.' . Str::slug($messageKey, '_'), $replace, app()->getLocale()),
            'data' => $data,
            'code' => $code
        ];
        if (env('app_env') != 'production') {
            if ($exception != null) $response['exception'] = $exception;
        }
        return response()->json($response, $code);
    }

}
