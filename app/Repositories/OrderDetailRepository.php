<?php
namespace App\Repositories;

use App\Model\Entities\OrderDetail;
use App\Repositories\Base\BaseRepository;

class OrderDetailRepository extends BaseRepository
{
    public function model()
    {
        return OrderDetail::class;
    }
}
