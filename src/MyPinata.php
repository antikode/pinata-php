<?php

namespace Antikode\PinataCloud;

use Antikode\PinataCloud\Services\Request;

class MyPinata extends Request
{
    public function testAuth()
    {
        return $this->fetch('data/testAuthentication');
    }

    public function getPin()
    {
        return 'getPin';
    }

    public function pinJson($name, array $keyValues = null, $content)
    {
        $data = [
            'pinataOptions' => [
                'cidVersion' => 0
            ],
            'pinataMetadata' => [
                'name' => $name,
                'keyValues' => $keyValues
            ],
            'pinataContent' => $content
        ];
        return $this->fetch('pinning/pinJSONToIPFS', json_encode($data), 'POST');
    }
}
