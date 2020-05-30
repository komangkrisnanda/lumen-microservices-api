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
}