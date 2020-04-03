<?php
namespace App\Repositories;
use App\Book;
use App\Factories\ProductFactory;
 class ProductRepository extends Repository implements IProductRepository
{
	public function __construct()
	{
		$book=resolve('App\Book');
		parent::setModel($book);
	}
	public function store($book)
    {
    	$bookArr=[
          'name'=>$book->getName(),
          'author'=>$book->getAuthor(),
          'price'=>$book->getPrice()
    	];

    	parent::store($bookArr);


	}
	public function getAll()
	{
		$fetchdatafrommodel=parent::getAll();

		$book=ProductFactory::convertModelToBO($fetchdatafrommodel);
		return $book;

	}
	public function get($id)
	{
		$bookedit=parent::get($id);
		return ProductFactory::setValueToModel($bookedit);
	}
}