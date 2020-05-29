<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Author;

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

    }

    public function show($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}
