<?php
namespace App\Services;
use App\BusinessObjects\IBook;
interface IProductService
{ 
	public function store(IBook $book);
	public function getAll();
}