<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\Certificate;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\MiniCaCrlOptions;

final class MiniCaOptions extends Options
{
    use GlobalOptionsTrait;

    public function root(): void
    {
        $this->setOptions('-root');
    }

    public function ca(): Certificate
    {
        $this->setOptions('-ca');
        $opt = new Certificate();
        $this->setOptions($opt);

        return $opt;
    }

    public function leaf()
    {

    }

    public function crl(): MiniCaCrlOptions
    {
        $this->setOptions('-crl');
        $opt = new MiniCaCrlOptions();
        $this->setOptions($opt);

        return $opt;
    }
}