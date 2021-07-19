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
            return back()->with('error', 'Your email is invalid or already subscribed');
        }
        
        return back()->with('success', "We'll keep you updated from now on");
    }
}
