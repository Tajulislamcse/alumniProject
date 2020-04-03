<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ViewProductModel=resolve('App\ViewModels\IViewProductModel');
       $books=$ViewProductModel->getAll();
       return view('books.index',compact('books'));
      // return $books;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $createproductmodel=resolve('App\ViewModels\ICreateProductModel');
        $createproductmodel->store();
        return redirect('/books');

    }
    public function edit($id)
    {
      $ViewProductModel=resolve('App\ViewModels\IViewProductModel');
      $editProduct=$ViewProductModel->get($id);
      return view('books.edit',compact('editProduct'));
    }

    
}
