<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\OrderDetailRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Input;
use Session;

/**
 * Class OrdersController
 * @package App\Http\Controllers\Frontend
 */
class OrdersController extends BaseController
{
    protected $_orderDetailRepository;

    public function setOrderDetailRepository($orderDetailRepository)
    {
        $this->_orderDetailRepository = $orderDetailRepository;
    }

    public function getOrderDetailRepository()
    {
        return $this->_orderDetailRepository;
    }

    public function __construct(
        OrderRepository $orderRepository,
        OrderDetailRepository $orderDetailRepository
    )
    {
        $this->setRepository($orderRepository);
        $this->setOrderDetailRepository($orderDetailRepository);
        parent::__construct();
    }

    public function payment()
    {
        $productsCart = Session::has('products_cart') ? Session::get('products_cart') : [];
        if (empty($productsCart)) {
            return redirect()->route('frontend.products.cart');
        }

        return view('frontend.orders.payment', compact('productsCart'));
    }

    public function postPayment()
    {
        $productsCart = Session::has('products_cart') ? Session::get('products_cart') : [];
        if (empty($productsCart)) {
            return redirect()->route('frontend.products.cart');
        }

        $order = Input::all();
        if (empty($order)) {
            return abort('404');
        }

        // @todo continue
        
    }

    public function success()
    {
        if (!Session::has('products_cart')) {
            return abort('404');
        }

        Session::forget('products_cart');
        return view('frontend.orders.success');
    }
}
