<?php
namespace App\Repositories;

use App\Model\Entities\Contact;
use App\Repositories\Base\BaseRepository;

/**
 * Class ContactRepository
 * @package App\Repositories
 */
class ContactRepository extends BaseRepository
{
    public function model()
    {
        return Contact::class;
    }
}
