<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'account' => 'required|min:6',
            'email' => 'required',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'account.required' => "Tên tài khoản không được để trống",
            'account.min' => "Tên tài khoản tối thiểu là 6 ký tự",
            'email.required' => "Email không được để trống",
            'password.required' => "Mật khẩu không được để trống",
            'password.min' => "Mật khẩu phải có ít nhất 6 ký tự",
        ];
    }
}
