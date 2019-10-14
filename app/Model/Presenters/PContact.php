<?php
namespace App\Model\Presenters;

/**
 * Trait PContact
 * @package App\Model\Presenters
 */
trait PContact
{
    public function getAccountName()
    {
        return !empty($this->user) ? $this->user->username : '';
    }
}
