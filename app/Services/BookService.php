<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class BookService{
    use ConsumeExternalService;

    public $baseUri;

    public function __construct(){
        $this->baseUri = config('services.books.base_uri');
    }
}