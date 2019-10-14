<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;
use App\Repositories\ContactRepository;

/**
 * Class ContactsController
 * @package App\Http\Controllers\Backend
 */
class ContactsController extends BaseController
{
	public function __construct(ContactRepository $contactRepository)
	{
		$this->setRepository($contactRepository);
		parent::__construct();
	}
}
