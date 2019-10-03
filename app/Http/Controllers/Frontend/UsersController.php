<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\UserRepository;

class UsersController extends BaseController
{
    public function __construct(UserRepository $userRepository)
    {
        $this->setRepository($userRepository);
        parent::__construct();
    }

    public function profile()
    {
        return view('frontend.users.profile');
    }
}
