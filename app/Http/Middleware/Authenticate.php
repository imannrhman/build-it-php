<?php

namespace App\Http\Middleware;

use App\Traits\ResponseAPITraits;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{

    use ResponseAPITraits;

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return $this->responseError([], 'Unauthenticated access');
        }
    }


    protected function unauthenticated($request, array $guards)
    {
       throw new HttpResponseException(
           $this->responseError([], 'Unauthenticated access')
       );
    }

}
