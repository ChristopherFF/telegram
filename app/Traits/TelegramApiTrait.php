<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

trait TelegramApiTrait
{


    public function getUpdates()
    {

        $client = new Client();
        $response = $client->request('GET', 'https://api.telegram.org/bot1490130080:AAGEfGivlnuFULiQSUfWCfQWzlBi4fXBtqo/getUpdates', [
            'headers' => [

            ]
        ]);


        Log::debug(print_r($response->getBody()->getContents(), true));

    }

    public function sendMessage()
    {


        $client = new Client();
        $response = $client->request('POST', 'https://api.telegram.org/bot1490130080:AAGEfGivlnuFULiQSUfWCfQWzlBi4fXBtqo/sendMessage', [
            'form_params' => [
                'chat_id' => '-426847974',
                'text' => 'klasjlASD'
            ]
        ]);

        Log::debug("####################");
        Log::debug(print_r($response->getBody()->getContents(), true));

//        https://api.telegram.org/bot1490130080:AAGEfGivlnuFULiQSUfWCfQWzlBi4fXBtqo/getUpdates


//        https://api.telegram.org/bot1490130080:AAGEfGivlnuFULiQSUfWCfQWzlBi4fXBtqo/sendMessage?chat_id=<group chat id >&text=<our text>
    }


}