<?php
namespace App\Repositories;

interface IProductRepository extends IRepository
{
  public function store($book);
  public function getAll();
}