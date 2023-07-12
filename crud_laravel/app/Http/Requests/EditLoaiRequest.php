<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditLoaiRequest extends FormRequest
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
            'ten_loai'=>'required|min:5|unique:loai_sp,ten_loai,'.$this->id_loai.',id'
        ];
    }

    public function messages(): array
    {
        return [
            'ten_loai.required'=>'Không được để trống tên loại!!',
            'ten_loai.min'=>'Không được nhập ít hơn 5 kí tự!!',
            'ten_loai.unique'=>'Tên loại đã tồn tại!!'
        ];
    }
}
