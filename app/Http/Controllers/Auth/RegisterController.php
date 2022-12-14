<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCustomersRequest;
use App\Http\Resources\AuthResource;
use App\Http\Resources\UserResource;
use App\Models\Role;
use App\Models\User;
use App\Traits\ResponseAPITraits;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use ResponseAPITraits;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function create_customers(RegisterCustomersRequest $request)
    {

        try {
            $validated = $request->validated();

            $data = $validated;

            $created = User::insertGetId([
                'full_name' => $data['full_name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 4,
            ]);

            $user = User::find($created);
            $token = auth('api')->login($user);

            return $this->responseSuccess([
                'user' => new UserResource($user),
                'type' => 'Bearer',
                'access_token' => $token,
                'expires_in' => auth('api')->factory()->getTTL() * 60,
            ],
                'Register Customer Success',
                201);
        } catch (\Exception $e) {
            return $this->responseError($e->getTraceAsString(), $e->getMessage());
        }
    }

    protected function create_store(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function create_professionals(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
