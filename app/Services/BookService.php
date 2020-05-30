<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class BookService{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.books.base_uri');
    }

    // Obtain the full list of book from the book service

    public function obtainBooks(){
        return $this->performRequest('GET', '/books');
    }

    // Create book using the book service

    public function createBook($data){
        return $this->performRequest('POST', '/books', $data);
    }

    // Obtain one list of book from the book service

    public function obtainBook($id){
        return $this->performRequest('GET', "/books/{$id}");
    }

    // Update book using the book service

    public function updateBook($data, $id){
        return $this->performRequest("PUT", "/books/{$id}", $data);
    }

    // Delete book using the book service

    public function deleteBook($id){
        return $this->performRequest("DELETE", "/books/{$id}");
    }
}