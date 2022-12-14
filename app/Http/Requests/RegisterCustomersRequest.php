<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterCustomersRequest extends FormRequest
{



    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required',
            'email' => 'required|unique:users|',
            'password' => ['required', 'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->mixedCase()
                    ->symbols()
                    ->numbers()
                    ->letters()
                    ->uncompromised()],
        ];
    }

    public function messages()
    {
        return [
          'full_name' => [
              'required' => 'Name is Required',
          ],
          'email' => [
              'required' => 'Email is Required',
              'unique' => 'Email already used',
          ],

        ];
    }



}
