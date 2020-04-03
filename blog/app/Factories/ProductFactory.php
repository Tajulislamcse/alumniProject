<?php

namespace App\Factories;
//use App\BusinessObjects\IBook;
// App\ViewModels\ICreateProductModel;

class ProductFactory
{
	 public static function convertModelToBO($fetchdatafrommodel)

 {
 	$books=[];
 	foreach ($fetchdatafrommodel as $value) 
 	{
 	     $book=resolve('App\BusinessObjects\IBook');
         $book->setId($value['id']);
 		 $book->setName($value['name']);
 		 $book->setAuthor($value['author']);
 		 $book->setPrice($value['price']);

         $books[]=$book;
     }
 	 
 	 return $books;

 }	
 
 public static function setvaluetoBOfromRequest($model)
 {
 	$book=resolve('App\BusinessObjects\IBook');

 	$book->setName($model->name);
 	$book->setAuthor($model->author);
 	$book->setPrice($model->price);
 	return $book;
 }
 public static function setValueToModel($bookedit)
 {
 	$book=resolve('App\BusinessObjects\IBook');
 	$book->setName($bookedit['name']);
 	$book->setAuthor($bookedit['author']);
 	$book->setPrice($bookedit['price']);
 	return $book;
 }

}