<?php
namespace App\Model\Presenters;

trait PAdmin 
{
	public function getRoleType() 
	{
		return getConfig('role_type.' . $this->role_type);
	}

	public function isSuperAdmin() 
	{
		return $this->role_type == getConstant('ROLE_TYPE_SUPER_ADMIN');
	}

	public function isAdmin() 
	{
		return $this->role_type == getConstant('ROLE_TYPE_ADMIN');
	}

	public function isOwner() 
	{
		return $this->id == backendGuard()->user()->id;
	}

	public function allowDelete() 
	{
		return !$this->isOwner();
	}
} 