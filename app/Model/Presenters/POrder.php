<?php
namespace App\Model\Presenters;

/**
 * Trait POrder
 * @package App\Model\Presenters
 */
trait POrder
{
    public function getTextStatus()
    {
        $status = $this->status;
        $color = getConfig('order_status_color.' . $status);
        $text = getConfig('order_status_text.' . $status);
        return '<span style="color: ' . $color . '">' . $text . '</span>';
    }

    public function getPaymentMethod()
    {
        return getConfig('payment_method.' . $this->payment_method);
    }
}
