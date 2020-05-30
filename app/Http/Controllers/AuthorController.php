<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;
use App\Traits\ApiResponser;
class AuthorController extends Controller
{
    use ApiResponser;

    public $authorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index(){
        return $this->successResponse($this->authorService->obtainAuthors());
    }

    public function show($id){
        return $this->successResponse($this->authorService->obtainAuthor($id));
    }

    public function store(Request $request){
        return $this->successResponse($this->authorService->createAuthor($request->all()),  Response::HTTP_CREATED);
    }

    public function update(Request $request, $id){
        return $this->successResponse($this->authorService->updateAuthor($request->all(), $id));
    }

    public function destroy($id){
        return $this->successResponse($this->authorService->deleteAuthor($id));
    }
}
