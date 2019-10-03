<?php
namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Base\BaseController;
use App\Http\Requests\Frontend\RegisterRequest;
use App\Repositories\UserRepository;
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
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->setRepository($userRepository);
        parent::__construct();
    }

    public function getLogin()
    {
        if (frontendGuard()->check()) {
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

        if (frontendGuard()->attempt($dataEmail) || frontendGuard()->attempt($dataTel)) {
            return redirect()->route('frontend.users.profile');
        }

        // Login failed
        return redirect()->back()->withErrors(new MessageBag(['errorLogin' => getMessage('backend_login_failed')]))->withInput();
    }

    public function logout()
    {
        frontendGuard()->logout();
        return redirectHome();
    }

    public function register(RegisterRequest $registerRequest)
    {
        $data['password'] = $registerRequest->get('password');

        $typeLogin = $registerRequest->get('type_login');
        if ($typeLogin == getConstant('FRONTEND_LOGIN_TYPE_EMAIL')) {
            $data['email'] = $registerRequest->get('login_id');
        } else {
            $data['tel'] = $registerRequest->get('login_id');
        }

        try {
            $this->getRepository()->create($data);
            return redirect()->back()->with(['success' => getMessage('register_success')]);
        } catch (\Exception $e) {
            logError($e);
        }
        return redirect()->back()->withErrors(['register_failed' => getMessage('register_failed')])->withInput();
    }
}
