<?php
namespace App\Model\Presenters;

trait PAdmin 
{
	public function getRoleType() 
	{
		return getConfig('role_type.' . $this->role_type);
	}
} 