<?php
namespace App\Model\Entities;

use App\Model\Base\BaseAuth;
use App\Model\Presenters\PAdmin;

class Admin extends BaseAuth 
{
	use PAdmin;

	protected $table = 'admin';
	protected $primaryKey = 'id';
	protected $fillable = ['name', 'email', 'password', 'role_type', 'ins_id', 'upd_id'];

	// Login not use remember_token
	public function save(array $options = array()) 
	{
		if(isset($this->remember_token)) {
			unset($this->remember_token);
		}
		return parent::save($options);
	}

	public function setPasswordAttribute($value) 
	{
		$this->attributes['password'] = bcrypt($value);
	}
}