<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Http\Requests\Frontend\UserRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

/**
 * Class UsersController
 * @package App\Http\Controllers\Frontend
 */
class UsersController extends BaseController
{
    public function __construct(UserRepository $userRepository)
    {
        $this->setRepository($userRepository);
        parent::__construct();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function profile()
    {
        if (!frontendGuard()->check()) {
            return redirectHome();
        }

        $entity = frontendGuard()->user();
        return view('frontend.users.profile', compact('entity'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function editProfile()
    {
        if (!frontendGuard()->check()) {
            return redirectHome();
        }

        $entity = frontendGuard()->user();
        return view('frontend.users.edit', compact('entity'));
    }

    /**
     * @param UserRequest $userRequest
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function updateProfile(UserRequest $userRequest)
    {
        if (!frontendGuard()->check()) {
            return abort('500');
        }

        $data = $this->_getFormData(false, false);

        if (empty($data['password'])) {
            unset($data['password']);
        }

        unset($data['confirm_password']);

        // Update
        DB::beginTransaction();

        try {
            $id = frontendGuard()->user()->id;
            $data['id'] = $id;
            $this->getRepository()->update($id, $data);
            DB::commit();
            return redirect()->route('frontend.users.profile')->with(['success' => getMessage('update_success')]);
        } catch (\Exception $e) {
            logError($e);
            DB::rollBack();
        }

        return redirect()->route('frontend.users.profile')->withErrors(new MessageBag(['update_failed' => getMessage('update_failed')]));
    }
}
