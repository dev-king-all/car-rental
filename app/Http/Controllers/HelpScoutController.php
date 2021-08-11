<?php

namespace App\Http\Controllers;

use HelpScout\Api\ApiClientFactory;
use Illuminate\Http\Request;
use HelpScout\Api\Webhooks\WebhooksEndpoint;
use HelpScout\Api\Entity\PagedCollection;
use HelpScout;
use HelpScout\Api\Customers\Customer;
use HelpScout\Api\Customers\Entry\Email;
use HelpScout\Api\Customers\Entry\ChatHandle;

class HelpScoutController extends Controller
{
    private $endpoint;
    private $id;




    public function index()
    {

        return view('admin.helpscout.index');

        $client = app('helpscout');


        $customer = new Customer();
        $customer->setFirstName('ISHFAQ');



// ...

        try {
            $customerId = $client->customers()->create($customer);
        } catch (\HelpScout\Api\Exception\ValidationErrorException $e) {
            var_dump($e->getError()->getErrors());
        }

        $chat = new ChatHandle();
        $chat->setValue('1239134812348');
        $chat->setType('icq');
// ...


        $email = new Email();
        $email->setValue('lucy@helpscout.com');
        $email->setType('work');
// ...

//        $client->customerEntry()->createEmail($customerId, $email);

        $client->customerEntry()->createChat($customerId, $chat);

        exit();


        $client = app('helpscout');
        $webhooks = $client->webhooks()->list();

        $customers = $client->customers()->list();

        dd($customers);
        $client = ApiClientFactory::createClient();
        $client = $client->swapAuthorizationCodeForReusableTokens(
            '1XKQM5Mgv7TJ3vcrT5SECXpgquHq2wGw',
            'gXe4oG3BtWwY1UwPjJLtmDBakqUYoqjj',
            '23111'
        );

        $credentials = $client->getAuthenticator()->getTokens();

        echo $credentials['access_token'].PHP_EOL;
        echo $credentials['refresh_token'].PHP_EOL;
        echo $credentials['expires_in'].PHP_EOL;
    }

    public function response()
    {

        $client = app('helpscout');
        $conversations = $client->conversations()->list();



        $public_properties = (array)$conversations;
//        dd((array)$public_properties[0]);
//        $p = (object)$public_properties[0];

//      $p = (object)$p;
      $main_array = (array)$public_properties;
//dd($p);
//        $array = json_decode(json_encode($p), true);
//
//        dd($main_array);


//        $temp = (array)(new Teste('foo','bar'));
//        $array = array();
//        foreach ($main_array as $k => $v) {
//            $k = preg_match('/^\x00(?:.*?)\x00(.+)/', $k, $matches) ? $matches[1] : $k;
//            $array[$k] = $v;
//        }
//        var_dump($array['id']);

//        foreach ($array as $key=>$value){
//            dd($key);
//        }
//
//exit();


        return view('admin.helpscout.index',compact('main_array'));

    }

    public function conversations($id)
    {
        $client = app('helpscout');
        $conversations = (array)$client->conversations()->get($id);
//        dd($conversations);
        return view('admin.helpscout.conversations',compact('conversations'));
    }
}
