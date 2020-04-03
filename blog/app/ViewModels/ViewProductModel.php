<?php
namespace App\ViewModels;
use App\Services\IProductService;

/**
 * 
 */
class ViewProductModel implements IViewProductModel
{
private $_productservice;
	
 public	function __construct(IProductService $productservice)
 {
		# code...
		$this->_productservice=$productservice;
 }
 public function getAll()
 {
 	return $this->_productservice->getAll();
 }	
 public function get($id)
 {
 	return $this->_productservice->get($id);
 }

}