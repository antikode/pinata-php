<?php

namespace Antikode\PinataCloud;

use Antikode\PinataCloud\Services\Request;

class MyPinata extends Request
{
    protected $cidVersion;

    public function __construct($cidVersion)
    {
        $this->cidVersion = $cidVersion;
    }

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

    public function pinByCID($cid, $name, $keyValues = null)
    {
        $data = [
            'hashToPin' => $cid,
            'pinataMetadata' => [
                'name' => $name,
                'keyvalues' => $keyValues,
            ]
        ];
        return $this->fetch('pinning/pinByHash', json_encode($data), 'POST');
    }
    
}
