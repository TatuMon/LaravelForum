<?php

namespace App\Services;

use Exception;
use MailchimpMarketing\ApiClient;

class Newsletter{
    protected $client;

    function __construct()
    {
        $client = new ApiClient();
        $client->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us6',
        ]);
    }

    public function subscribe(){
        try{
            $response = $this->client->lists->addListMember(config('services.mailchimp.lists.subscribers'), [
                'email_address' => auth()->user()->email,
                'status' => 'subscribed'
            ]);

            return back()->with('success', "We'll keep you updated from now on");
        } catch(Exception $e) {
            return back()->with('error', "Your email is invalid or already signed in");
        }
    }
}