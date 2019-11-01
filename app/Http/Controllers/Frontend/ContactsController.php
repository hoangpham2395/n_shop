<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Http\Requests\Frontend\ContactRequest;
use App\Repositories\ContactRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;

/**
 * Class ContactsController
 * @package App\Http\Controllers\Frontend
 */
class ContactsController extends BaseController
{
    public function __construct(ContactRepository $contactRepository)
    {
        $this->setRepository($contactRepository);
        parent::__construct();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setTitle(env('APP_NAME') . ' - ' . transa('contact'));
        return $this->render('frontend.pages.contact');
    }

    /**
     * @param ContactRequest $contactRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContactRequest $contactRequest)
    {
        $data = $contactRequest->all();
        $data['user_id'] = frontendGuard()->check() ? frontendGuard()->user()->id : null;

        DB::beginTransaction();
        try {
            $this->getRepository()->create($data);
            DB::commit();
            return redirect()->back()->with(['success' => getMessage('contact_success')]);
        } catch (\Exception $e) {
            logError($e);
            DB::rollBack();
        }
        return redirect()->back()->withErrors(new MessageBag(['create_failed' => getMessage('contact_failed')]));
    }
}
