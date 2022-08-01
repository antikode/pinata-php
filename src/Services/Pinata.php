<?php

namespace Antikode\PinataCloud\Services;

use Antikode\PinataCloud\Exceptions\ConfigNotFoundException;
use Antikode\PinataCloud\MyPinata;

class Pinata
{
    public static function configNotPublished()
    {
        return is_null(config('pinata'));
    }

    public static function init($cidVersion = 0)
    {
        if (self::configNotPublished()) {
            throw new ConfigNotFoundException('The configuration was not exists. You must publish the config file first');
        }
        return new MyPinata($cidVersion);
    }
}
