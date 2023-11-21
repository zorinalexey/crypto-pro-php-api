<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\DefProv;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvnameTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;

class SetDefOptions extends Options
{
    use ProvnameTrait, ProvtypeTrait;

    public function __construct()
    {
        $this->setOptions('-setdef');
    }
}
