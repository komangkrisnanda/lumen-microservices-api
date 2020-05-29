<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Book;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $books = Book::all();

        return $this->successResponse($books);
    }

    public function store(Request $request){
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1'
        ];

        $this->validate($request, $rules);

        $book = Book::create($request->all());

        return $this->successResponse($book, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
