<?php
namespace App\Services;
use App\Repositories\IProductRepository;
use App\BusinessObjects\IBook;

class ProductService implements IProductService
{
	private $_productrepository;
	public function __construct(IProductRepository $productrepository)
	{
		$this->_productrepository=$productrepository;
	}
	public function store(IBook $book)
	{
		$this->_productrepository->store($book);
	}
	public function getAll()
	{
		return $this->_productrepository->getAll();
	}
	public function get($id)
	{
		return $this->_productrepository->get($id);
	}
}