<?php

namespace App\Services;

use App\Traits\ConsumeExternalService;

class AuthorService{
    use ConsumeExternalService;

    public $baseUri;

    public function _construct(){
        $this->baseUri = config('services.authors.base_uri');
    }
}