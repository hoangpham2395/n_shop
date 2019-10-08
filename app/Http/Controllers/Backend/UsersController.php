<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Input;

/**
 * Class UsersController
 * @package App\Http\Controllers\Backend
 */
class UsersController extends BaseController
{
    public function __construct(UserRepository $userRepository)
    {
        $this->setRepository($userRepository);
        parent::__construct();
    }

    public function changeStatus()
    {
        $id = Input::get('id');
        $entity = $this->getRepository()->findById($id);
        if (empty($entity)) {
            return response()->json([
                'status' => false,
                'message' => getMessage('user_not_exist'),
            ]);
        }

        try {
            $isActive = $entity->isActive();
            $newStatus = $isActive ? getConstant('USERS_STATUS_BLOCK') : getConstant('USERS_STATUS_ACTIVE');
            $this->getRepository()->update($id, [
                'status' => $newStatus,
            ]);
            return response()->json([
                'status' => true,
                'message' => getMessage('update_success'),
                'data' => [
                    'status' => $newStatus,
                    'isActive' => !$isActive,
                ],
            ]);
        } catch (\Exception $e) {
            logError($e);
            return response()->json([
                'status' => false,
                'message' => getMessage('system_error'),
            ]);
        }
    }
}
