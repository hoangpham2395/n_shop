<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Input;

/**
 * Class OrdersController
 * @package App\Http\Controllers\Backend
 */
class OrdersController extends BaseController
{
    public function __construct(OrderRepository $orderRepository)
    {
        $this->setRepository($orderRepository);
        parent::__construct();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $entities = $this->getRepository()->getListForBackend();
        return view('backend.orders.index', compact('entities'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function show($id)
    {
        $entity = $this->getRepository()->findById($id);
        if (empty($entity)) {
            return abort('404');
        }

        $orderDetail = $entity->orderDetail;
        return view('backend.orders.show', compact('entity', 'orderDetail'));
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeStatus()
    {
        try {
            $data = Input::all();

            // Check exist
            $id = array_get($data, 'id');
            $entity = $this->getRepository()->findById($id);
            if (empty($entity)) {
                return response()->json([
                    'status' => false,
                    'message' => getMessage('order_not_exist'),
                ]);
            }

            // Check status
            $status = array_get($data, 'status');
            if (!in_array($status, array_values(getConfig('order_status')))) {
                return response()->json([
                    'status' => false,
                    'message' => transv('not_in', ['attribute' => transm('orders.status')]),
                ]);
            }

            // Update status
            $entity->status = $status;
            $entity->save();
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'data' => [
                    'status' => $status,
                    'text_status' => $entity->getTextStatus(),
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
