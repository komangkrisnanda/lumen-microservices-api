<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\BookService;
use App\Traits\ApiResponser;
class BookController extends Controller
{
    use ApiResponser;

    public $bookService;
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
        return $this->successResponse($this->bookService->obtainBooks());
    }

    public function show($id){
        return $this->successResponse($this->bookService->obtainBook($id));
    }

    public function store(Request $request){
        return $this->successResponse($this->bookService->createBook($request->all()),  Response::HTTP_CREATED);
    }

    public function update(Request $request, $id){
        return $this->successResponse($this->bookService->updateBook($request->all(), $id));
    }

    public function destroy($id){
        return $this->successResponse($this->bookService->deleteBook($id));
    }
}
