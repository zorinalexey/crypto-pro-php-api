<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\HardWare;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\ViewTrait;

class Reader extends Options
{
    public function __construct()
    {
        $this->setOptions('reader');
    }

    use ViewTrait;
}