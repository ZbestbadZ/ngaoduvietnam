<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/login';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->guard('admin')->Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('adminLogin'));
    }
}
