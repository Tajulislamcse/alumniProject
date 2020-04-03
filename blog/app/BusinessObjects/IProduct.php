<?php
namespace App\BusinessObjects;
interface IBook
{
	public function setName($name);
	public function getName();
	public function setAuthor($author);
	public function getAuthor();
	public function setPrice($price);
	public function getPrice();

}