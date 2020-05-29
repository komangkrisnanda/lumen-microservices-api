<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Author;
use Illuminate\Http\Response;

class AuthorController extends Controller
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
        $authors = Author::all();
        return $this->successResponse($authors);
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255'
        ];

        $this->validate($request, $rules);

        $author = Author::create($request->all());

        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    public function show($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}
