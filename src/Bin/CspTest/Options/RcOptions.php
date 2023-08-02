<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions\RcChainOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions\RcIssuerOption;

final class RcOptions extends Options
{
    use GlobalOptionsTrait;

    public function store(): RcChainOptions
    {
        $opt = new RcChainOptions();
        $this->setOptions($opt);

        return $opt;
    }

    public function request(string $filePath): RcIssuerOption
    {
        $this->setOptions('-reg "' . $filePath . '"');
        $opt = new RcIssuerOption();
        $this->setOptions($opt);

        return $opt;
    }

    public function certificate(string $filePath): RcIssuerOption
    {
        $this->setOptions('-cert "' . $filePath . '"');
        $opt = new RcIssuerOption();
        $this->setOptions($opt);

        return $opt;
    }

    public function base64(): RcIssuerOption
    {
        $this->setOptions('-base64');
        $opt = new RcIssuerOption();
        $this->setOptions($opt);

        return $opt;
    }


}