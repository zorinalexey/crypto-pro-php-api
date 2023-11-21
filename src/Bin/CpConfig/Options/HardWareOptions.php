<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\HardWare\Reader;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\HardWare\RndmOptions;

final class HardWareOptions extends Options
{
    public function reader(): Reader
    {
        $opt = new Reader();
        $this->setOptions($opt);

        return $opt;
    }

    public function rndm(): RndmOptions
    {
        $opt = new RndmOptions();
        $this->setOptions($opt);

        return $opt;
    }
}
