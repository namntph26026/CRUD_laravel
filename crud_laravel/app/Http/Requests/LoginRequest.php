<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required|min:5',
            'password'=>'required|min:5'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'=>'Không được để trống!!',
            'email.min'=>'Không được nhập ít hơn 5 kí tự!!',
            'password.required'=>'Không được để trống!!',
            'password.min'=>'Không được nhập ít hơn 5 kí tự!!',
        ];
    }
}
