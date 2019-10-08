<?php
namespace App\Model\Presenters;

/**
 * Trait PUser
 * @package App\Model\Presenters
 */
trait PUser
{
    public function isActive()
    {
        return $this->status == getConstant('USERS_STATUS_ACTIVE');
    }

    public function isBlock()
    {
        return $this->status == getConstant('USERS_STATUS_BLOCK');
    }

    public function getStatus()
    {
        $isActive = $this->isActive();
        $class = $isActive ? 'btn-success' : 'btn-warning';
        $icon = $isActive ? 'fa-unlock' : 'fa-lock';
        $html = '<button class="btn btn-sm ' . $class . '" type="button" ';
        $html .= 'onclick="UsersController.changeStatus(this)" ';
        $html .= 'data-id="' . $this->id . '" data-route="' . route('backend.users.change_status') . '" ';
        $html .= 'data-token="' . csrf_token() . '"><i class="fa ' . $icon . '"></i></button>';
        return $html;
    }
}
