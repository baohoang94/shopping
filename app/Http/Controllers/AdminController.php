<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        if (auth()->check()) {
            return redirect()->to('home');
        }
        return view('login');
    }
    public function postloginAdmin(Request $request)
    {
        $remember = $request->has('remember_me') ? true : false;
        if (auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password,
        ], $remember)) {
            return redirect()->to('home');
        }
        $message = 'Thông tin đăng nhập không chính xác';
        return view('login', compact('message'));
    }
    public function logoutAdmin()
    {
        auth()->logout();
        return redirect()->route('admin');
    }

}
