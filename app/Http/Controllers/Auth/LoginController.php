<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard';

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = \App\Models\User::where('email', $request->email)->first();

        if ($user) {
            if (Auth::attempt($request->only(['email', 'password']), $request->filled('remember'))) {
                Alert::success('Login Successful', 'Welcome back!');
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()
                    ->withInput()
                    ->withErrors(['password' => 'The password you entered is incorrect.']);
            }
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors(['email' => 'The email you entered is not registered.']);
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
