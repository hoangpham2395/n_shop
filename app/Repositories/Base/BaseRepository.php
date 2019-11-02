<?php
namespace App\Repositories\Base;
use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseRepository
{
	protected $app;
	protected $model;


	public function __construct(Application $app)
	{
		$this->app = $app;
		$this->makeModel();
	}

	public function model()
	{
		return '';
	}

	public function makeModel()
    {
    	try {
        	$model = $this->app->make($this->model());
        	return $this->model = $model;
    	} catch(ModelNotFoundException $e) {
			logError($e);
    	}

    }

	public function getModel()
	{
		return new $this->model();
	}

	public function getList()
    {
        return $this->getModel()->get();
    }

	public function getListForBackend($params = [])
	{
		// Pagination
		if (!empty($params['page'])) {
			unset($params['page']);
		}

		return $this->getModel()->where(function($q) use($params) {
			foreach ($params as $field => $value) {
				$q = $q->where($field, 'LIKE', '%'.$value.'%');
			}
		})
		->orderBy('id', 'DESC')
		->paginate(getConfig('paginate.backend.default', 20));
	}

	public function getListForDropDown($field = '', $fieldId = 'id')
	{
		if (empty($field)) {
			return [];
		}

		return $this->getModel()->orderBy($fieldId, 'DESC')->get()->pluck($field, $fieldId)->toArray();
	}

	public function findById($id)
	{
		return $this->getModel()->where('id', $id)->first();
	}

	public function create($data = [])
	{
		return $this->getModel()->create($data);
	}

	public function update($id, $data = [])
	{
		return $this->getModel()->where('id', $id)->update($data);
	}

	public function destroy($id)
	{
		return $this->getModel()->destroy($id);
	}
}
