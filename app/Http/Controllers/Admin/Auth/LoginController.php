<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function loginCheck(LoginRequest $request)
    {
        if (Auth::guard('admin')->user()) {
            if (Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
                return view('admin.dashboard')->with('successMessage', 'You have successfully logged in.');
            }

            return back()->with('error', 'your username and password are wrong.');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->user()) {
            Auth::logout();
        }
        return redirect()->route('adminLogin');
    }
}
