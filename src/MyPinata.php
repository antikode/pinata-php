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
}
