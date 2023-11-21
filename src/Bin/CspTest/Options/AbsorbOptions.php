<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\AbsorbParamsOptions;

final class AbsorbOptions extends Options
{
    use GlobalOptionsTrait;

    public function roots(): AbsorbParamsOptions
    {
        $opt = new AbsorbParamsOptions();
        $this->setOptions('-roots');
        $this->setOptions($opt);

        return $opt;
    }

    public function certs(): AbsorbParamsOptions
    {
        $opt = new AbsorbParamsOptions();
        $this->setOptions('-certs');
        $this->setOptions($opt);

        return $opt;
    }
}
