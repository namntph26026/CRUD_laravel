<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamAddRequest extends FormRequest
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
            'ten_sp'=>'required|min:5|unique:san_pham,ten_sp',
            'gia_sp'=>'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'ten_sp.required'=>'Không được để trống tên sp!!',
            'ten_sp.min'=>'Không được nhập ít hơn 5 kí tự!!',
            'ten_sp.unique'=>'Tên sp đã tồn tại!!',
            'gia_sp.required'=>'Không được để trống giá sp!!',
            'gia_sp.numeric'=>'Giá tiền phải là số!!'
        ];
    }
}
