<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions as EnumOpt;

final class EnumOptions extends Options
{
    use GlobalOptionsTrait;

    public function test(): EnumOpt
    {
        $this->setOptions('-test');
        $opt = new EnumOpt();
        $this->setOptions($opt);

        return $opt;
    }

    public function info(): EnumOpt
    {
        $this->setOptions('-info');
        $opt = new EnumOpt();
        $this->setOptions($opt);

        return $opt;
    }
}
