<?php
namespace App\Repositories;

use App\Model\Entities\User;
use App\Repositories\Base\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }

    public function getListForBackend($params = [])
    {
        // Pagination
        if (!empty($params['page'])) {
            unset($params['page']);
        }

        return $this->getModel()->where(function($q) use($params) {
            if (!empty($params['status'])) {
                $q = $q->where('status', $params['status']);
            }
            unset($params['status']);
            foreach ($params as $field => $value) {
                if (empty($value)) {
                    continue;
                }
                $q = $q->where($field, 'LIKE', '%'.$value.'%');
            }
            return $q;
        })
        ->orderBy('id', 'DESC')
        ->paginate(getConfig('paginate.backend.default', 20));
    }
}
