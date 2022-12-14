<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\ResponseAPITraits;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use ResponseAPITraits;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            $credentials = $request->only('email', 'password');

            $token = auth('api')->attempt($credentials);
            if (!$token) {
                return $this->responseError([], 'User Not Found !');
            }

            $user = auth('api')->user();
            return $this->responseSuccess(
                [
                    'user' => new UserResource($user),
                    'type' => 'Bearer',
                    'access_token' => $token,
                    'expires_in' => auth('api')->factory()->getTTL() * 60,

                ],
            );
        } catch (\Exception $e) {
            return $this->responseError($e, $e->getMessage());
        }
    }
}
