<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $category;
    private $user;

    public function __construct(Category $category, User $user)
    {
        $this->category = $category;
        $this->user = $user;
    }

    public function login()
    {
        $categoryLimit = $this->category->where('parent_id', 0)->take(3)->get();
        return view('user.login', compact('categoryLimit'));
    }
    public function postlogin(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        if (auth()->attempt([
            'email'=> $request->email,
            'password'=> $request->password,
        ], $remember)) {
            return redirect()->to('/');
        }
        $message = 'Thông tin đăng nhập không chính xác';
        return redirect()->route('user.login');
    }
    public function register(Request $request)
    {
        $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->to('/');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
