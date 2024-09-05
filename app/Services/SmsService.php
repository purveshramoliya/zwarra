<?php
namespace App\Services;

use GuzzleHttp\Client;

class SmsService
{
    protected $client;
    protected $apiUrl = 'https://www.dreams.sa/index.php/api/sendsms/';
    protected $user = 'Alaqa';
    protected $secretKey = '97aca06a4fd54aeb571d0de1ecac4f84ee19d323d5b56fe0a74d7eb2bfc673fe';
    protected $sender = 'zuwara';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function sendSms($to, $message)
    {
        $response = $this->client->get($this->apiUrl, [
            'query' => [
                'user' => $this->user,
                'secret_key' => $this->secretKey,
                'to' => $to,
                'message' => $message,
                'sender' => $this->sender,
            ],
             'verify' => false, // Disable SSL verification
        ]);

        return $response->getBody()->getContents();
    }
}
?>