<?php
namespace App\Repositories;
class Repository implements IRepository
{
	protected $model;
	public function setModel($model)
	{
		$this->model=$model;
	}
	public function getModel()
	{
		return $this->model;
	}
	public function store($record)
	{
		$this->model->create($record);
	}
	public function getAll()
	{
		 return $this->model->all();
	}
	public function get($id)
	{
		return $this->model->find($id);
	}

}