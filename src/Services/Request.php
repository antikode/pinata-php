<?php

namespace Antikode\PinataCloud\Services;

use GuzzleHttp\Client;

class Request
{
    protected $base = 'https://api.pinata.cloud/';

    public function fetch($endpoint, mixed $body = null, $method = 'get')
    {
        $client = new Client([
            'base_uri' => $this->base,
        ]);
        $request = [];

        $request['headers'] = [
            'Authorization' => 'Bearer '.config('pinata.jwt'),
            'Content-Type' => 'application/json'
        ];

        if ($body != null) {
            $request['body'] = $body;
        }

        try {
            if ($method === 'get') {
                $fetch = $client->get($endpoint, $request);
            } else {
                $fetch = $client->post($endpoint, $request);
            }

            $data = json_decode($fetch->getBody()->getContents());
            return [
                'success' => true,
                'data' => $data
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'data' => $e->getMessage()
            ];
        }
    }
}
