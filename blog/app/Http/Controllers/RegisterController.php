<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showPageRegister()
    {
        return view('user.register-page');
    }

    public function registerAccount(RegisterRequest $request)
    {
        $register = $request->all();
        $newAccount = new Account();
        $repeatPassword = $request->passwordrepeat;
        if ($repeatPassword === $request->password) {
            $newAccount->fill($register);
            $newAccount->password = Hash::make($request->password);
            $newAccount->save();
            $registerSucsess = 'Đăng ký tài khoản thành công';
            session()->flash('register-success', $registerSucsess);
            return view('user.login-page');
        }
        $registerFail = 'Nhập lại mật khẩu không đúng';
        session()->flash('register-fail', $registerFail);
        return view('user.register-page');
    }
}
