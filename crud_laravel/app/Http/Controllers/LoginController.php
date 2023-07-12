<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function GetLogin(){
        return view("login");
    }

    public function PostLogin(LoginRequest $r){
        $email=$r->email;
        $password=$r->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect('admin')->with('thongbao','Đăng nhập thành công!!');
        }else{
            return redirect()->back()->with('thongbao','Tên đăng nhập hoặc mật khẩu không chính xác!!');
        }
        
    }
}
