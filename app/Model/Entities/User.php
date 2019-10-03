<?php
namespace App\Model\Entities;

use App\Model\Base\BaseAuth;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends BaseAuth
{
    use SoftDeletes;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'email', 'tel', 'password', 'status', 'fb_id', 'address'];

    // Login not use remember_token
    public function save(array $options = array())
    {
        if (isset($this->remember_token)) {
            unset($this->remember_token);
        }
        return parent::save($options);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
}
