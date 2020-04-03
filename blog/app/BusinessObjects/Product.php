<?php

/**
 * 
 */
namespace App\BusinessObjects;
class Book implements IBook
{
	private $id;
	private $name;
	private $author;
	private $price;
	
    public function setId($id)
    {
        $this->id=$id;
    }
    public function getId()
    {
        return $this->id;
    }
	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName()
    {
    	return $this->name;
    }

    public function setAuthor($author)
    {
    	$this->author=$author;
    }
    public function getAuthor()
    {
    	return $this->author;
    }
    public function setPrice($price)
    {
    	$this->price=$price;
    }
    public function getPrice()
    {
    	return $this->price;
    }
}