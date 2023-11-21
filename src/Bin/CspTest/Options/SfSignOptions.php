<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions;

final class SfSignOptions extends Options
{
    use GlobalOptionsTrait;

    public function sign(): SignOptions
    {
        $this->setOptions('-sign');
        $opt = new SignOptions();
        $this->setOptions($opt);

        return $opt;
    }

    public function verify(): SignOptions
    {
        $this->setOptions('-verify');
        $opt = new SignOptions();
        $this->setOptions($opt);

        return $opt;
    }
}
