<?php
namespace App\Repositories;
interface IRepository
{
	public function store($record);
	public function setModel($model);
	public function getModel();
	public function getAll();
}