<?php
namespace App\Model\Entities;

use App\Model\Base\Base;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Model\Entities
 */
class Contact extends Base
{
    use SoftDeletes;

    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'username', 'tel', 'email', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
