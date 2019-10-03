<?php
namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Base\BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Frontend\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

/**
 * Class LoginController
 * @package App\Http\Controllers\Frontend\Auth
 */
class LoginController extends BaseController
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after auth.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        if (Auth::guard('frontend')->check()) {
            return redirectHome();
        }

        return view('frontend.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $dataEmail = [
            'email' => $request->get('login_id'),
            'password' => $request->get('password'),
        ];

        $dataTel = [
            'tel' => $request->get('login_id'),
            'password' => $request->get('password'),
        ];

        if (Auth::guard('frontend')->attempt($dataEmail) || Auth::guard('frontend')->attempt($dataTel)) {
            return redirect()->route('frontend.users.profile');
        }

        // Login failed
        return redirect()->back()->withErrors(new MessageBag(['errorLogin' => getMessage('backend_login_failed')]))->withInput();
    }

    public function logout()
    {
        Auth::guard('frontend')->logout();
        return redirectHome();
    }

    public function register()
    {

    }
}
