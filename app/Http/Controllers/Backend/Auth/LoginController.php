<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Base\BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Backend\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class LoginController extends BaseController
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
    protected $redirectTo = '/management';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() 
    {
        if (Auth::guard('backend')->check()) {
            return redirect()->route('backend.dashboard.index');
        }
        
        return view('backend.auth.login');
    }

    public function postLogin(LoginRequest $request) 
    {
        $data = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if (Auth::guard('backend')->attempt($data)) {
            return redirect()->route('backend.dashboard.index');
        }

        // Login failed
        return redirect()->back()->withErrors(new MessageBag(['errorLogin' => getMessage('backend_login_failed')]))->withInput();
    }

    public function logout() 
    {
        Auth::guard('backend')->logout();
        return redirect()->route('backend.login.get');
    }
}
