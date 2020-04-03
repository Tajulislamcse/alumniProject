<?php

namespace App\ViewModels;
use Illuminate\Http\Request;
use App\Services\IProductService;
use App\Factories\ProductFactory;
/**
 * 
 */
class CreateProductModel implements ICreateProductModel
{
	private $_productservice;
	
	public $name;
	public $author;
	public $price;
	function __construct(IProductService $productservice,Request $request)
	{
		# code...
		$this->_productservice=$productservice;
		$this->loadfields($request);
        
	}
	public function store()

	{ 
		$product=ProductFactory::setvaluetoBOfromRequest($this);
		$this->_productservice->store($product);
	}
	public function loadfields($request)
	{  
		$this->name=$request->name;
		$this->author=$request->author;
		$this->price=$request->price;
	}
}