<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\OrderRepository;

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

    public function index()
    {
        $entities = $this->getRepository()->getListForBackend();
        return view('backend.orders.index', compact('entities'));
    }

    public function show($id)
    {
        $entity = $this->getRepository()->findById($id);
        if (empty($entity)) {
            return abort('404');
        }

        $orderDetail = $entity->orderDetail;
        return view('backend.orders.show', compact('entity', 'orderDetail'));
    }
}
