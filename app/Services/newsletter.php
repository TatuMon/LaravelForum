<?php

namespace App\Services;

use Exception;
use MailchimpMarketing\ApiClient;

class Newsletter{
    public function subscribe(string $list = null){
        $list ??= config('services.mailchimp.lists.subscribers');

        $response = $this->client()->lists->addListMember($list, [
            'email_address' => auth()->user()->email,
            'status' => 'subscribed'
        ]);

        return back()->with('success', "We'll keep you updated from now on");
    }

    protected function client(){
        return (new ApiClient())->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us6',
            ]);
    }
}