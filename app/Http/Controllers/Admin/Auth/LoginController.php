<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Request;

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
        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->has('remember'))) {
            return redirect()->route('dashboard')->with('success', 'You have successfully logged in!');
        }
        return back()->with('error', 'The email and password do not exist in the system');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::guard('admin')->logout();

        return redirect()->route('adminLogin');
    }
}
