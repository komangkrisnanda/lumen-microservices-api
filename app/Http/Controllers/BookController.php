<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Service\BookService;

class BookController extends Controller
{
    use ApiResponser;

    public $authorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index(){

    }

    public function show($id){

    }

    public function store(Request $request){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
