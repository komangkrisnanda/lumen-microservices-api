<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class AuthorService{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.authors.base_uri');
    }

    // Obtain the full list of author from the author service

    public function obtainAuthors(){
        return $this->performRequest('GET', '/authors');
    }

    // Create author using the author service

    public function createAuthor($data){
        return $this->performRequest('POST', '/authors', $data);
    }

    public function obtainAuthor($id){
        return $this->performRequest('GET', "/authors/{$id}");
    }
}