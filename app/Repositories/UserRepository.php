<?php
namespace App\Repositories;

use App\Model\Entities\User;
use App\Repositories\Base\BaseRepository;

class UserRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }
}
