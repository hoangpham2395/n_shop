<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Http\Requests\Frontend\OrderRequest;
use App\Repositories\OrderDetailRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\MessageBag;
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

    public function postPayment(OrderRequest $orderRequest)
    {
        $productsCart = Session::has('products_cart') ? Session::get('products_cart') : [];
        if (empty($productsCart)) {
            return redirect()->route('frontend.products.cart');
        }

        $order = Input::all();
        if (empty($order)) {
            return abort('404');
        }

        DB::beginTransaction();
        try {
            $orderId = $this->getNextInsertId();
            $totalPrice = 0;

            // Create orders detail
            foreach ($productsCart as $productCart) {
                $quantity = (int) array_get($productCart, 'quantity');
                $unitPrice = !empty($productCart['price_sale']) ? $productCart['price_sale'] : (int) array_get($productCart, 'price');
                $totalUnitPrice = $quantity * $unitPrice;
                $data = [
                    'order_id' => $orderId,
                    'product_id' => array_get($productCart, 'id'),
                    'quantity' => $quantity,
                    'total_unit_price' => $totalUnitPrice,
                    'size' => array_get($productCart, 'size'),
                    'color' => array_get($productCart, 'color'),
                ];

                $this->getOrderDetailRepository()->create($data);
                $totalPrice += $totalUnitPrice;
            }

            // Create order
            $order['status'] = getConfig('order_status.guest_booked', 1);
            $order['total_price'] = $totalPrice;
            $this->getRepository()->create($order);

            DB::commit();
            return redirect()->route('frontend.orders.success');
        } catch (\Exception $e) {
            logError($e);
            DB::rollBack();
        }
        return redirect()->back()->withErrors(new MessageBag(['order_failed' => getMessage('order_failed')]));
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
