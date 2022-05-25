<?php

namespace App\Exceptions;

use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\RecordsNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (Throwable $exception, $request) {
            switch ($exception) {
                case $exception instanceof RouteNotFoundException:
                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('route_not_found', [], 404);
                    }
                    return response()->view('errors.404');

                case $exception instanceof AuthenticationException:
                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('unauthenticated', [], 401);
                    }
                    return response()->view('errors.401', 'unauthenticated', 401);
                case $exception instanceof UnauthorizedException:
                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('unauthorized', $exception->getMessage(), $exception->getCode());
                    }
                    return response()->view('errors.403');

                case $exception instanceof \Spatie\Permission\Exceptions\UnauthorizedException:
                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('unauthorized', [], 403);
                    }
                    return response()->view('errors.403');

                case $exception instanceof RecordsNotFoundException
                    or $exception instanceof NotFoundHttpException
                    or $exception instanceof FileNotFoundException:

                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('not_found', [], 404);
                    }
                    return response()->view('errors.404');


                case $exception instanceof TokenMismatchException:
                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('mismatch_token', $exception->getMessage(), 419);
                    }
                    return response()->view('errors.419');
                case $exception instanceof ValidationException:
                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('invalid_data', $exception->errors(), 422);
                    }
                    return back()->with($exception->errors(), 422);

                /* Other Exceptions */
                default:
                    if ($request->wantsJson()) {
                        return Controller::getJsonResponse('internal_server_error', $exception->getMessage(), 500);
                    }
                    return response()->view('errors.500');
            }

        });
    }
}
