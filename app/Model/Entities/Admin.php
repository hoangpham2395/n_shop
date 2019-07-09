<?php
namespace App\Model\Entities;

use App\Model\Base\BaseAuth;

class Admin extends BaseAuth 
{
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
}