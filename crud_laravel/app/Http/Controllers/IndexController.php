<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function GetIndex(){
        return view("index");
    }

    public function GetLogOut(){
        Auth::logout();
        return redirect('');
    }
}
