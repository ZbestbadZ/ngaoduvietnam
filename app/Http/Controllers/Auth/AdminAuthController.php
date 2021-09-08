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
        if ($this->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return view('admin.dashboard')->with('successMessage', 'You have successfully logged in.');
        } else {
            return back()->with('error', 'your username and password are wrong.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('adminLogin');
    }
}
