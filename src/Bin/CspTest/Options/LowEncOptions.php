<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;

final class LowEncOptions extends Options
{
    use GlobalOptionsTrait;

    public function encrypt(): EncryptOptions
    {
        $opt = new EncryptOptions();
        $this->setOptions($opt);

        return $opt;
    }

    public function decrypt(): EncryptOptions
    {
        $opt = new EncryptOptions();
        $this->setOptions($opt);

        return $opt;
    }
}
