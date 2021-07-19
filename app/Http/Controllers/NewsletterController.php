<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        try{
            $newsletter->subscribe();
        } catch(Exception $e) {
            throw $e;
        }
        
    }
}
