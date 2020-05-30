<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class AuthorService{
    use ConsumeExternalService;

    public $baseUri;
    public $secret;

    public function __construct(){
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('services.authors.secret');
    }

    // Obtain the full list of author from the author service

    public function obtainAuthors(){
        return $this->performRequest('GET', '/authors');
    }

    // Create author using the author service

    public function createAuthor($data){
        return $this->performRequest('POST', '/authors', $data);
    }

    // Obtain one list of author from the author service

    public function obtainAuthor($id){
        return $this->performRequest('GET', "/authors/{$id}");
    }

    // Update author using the author service

    public function updateAuthor($data, $id){
        return $this->performRequest("PUT", "/authors/{$id}", $data);
    }

    // Delete author using the author service

    public function deleteAuthor($id){
        return $this->performRequest("DELETE", "/authors/{$id}");
    }
}