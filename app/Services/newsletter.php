<?php

namespace App\Services;

use Exception;
use MailchimpMarketing\ApiClient;

class Newsletter{
    public function subscribe(){
        $client = new ApiClient();
        $client->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us6',
        ]);

        try{
            $response = $client->lists->addListMember('f61a87042a', [
                'email_address' => auth()->user()->email,
                'status' => 'subscribed'
            ]);

            return back()->with('success', "We'll keep you updated from now on");
        } catch(Exception $e) {
            back()->with('error', $e->getMessage());
        }
    }
}