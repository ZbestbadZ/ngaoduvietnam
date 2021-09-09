<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Input;
use Session;
use Exception;

class AdminAuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/login';
    protected $guard = 'admin';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function loginCheck(LoginRequest $request)
    {
        if (Auth::guard('admin')->user()) {
            if (Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
                dd($request->all());

                return view('admin.dashboard')->with('successMessage', 'You have successfully logged in.');
            }
            dd($request->all());
            return back()->with('error', 'your username and password are wrong.');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->user()->logout();
        return redirect()->route('adminLogin');
    }
}
