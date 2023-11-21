<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions\EnumsOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions\SendOptions;

final class CardOptions extends Options
{
    use GlobalOptionsTrait;

    public function enum(): EnumsOptions
    {
        $this->setOptions('-enum');
        $opt = new EnumsOptions();
        $this->setOptions($opt);

        return $opt;
    }

    public function send(): SendOptions
    {
        $this->setOptions('-enum');
        $opt = new SendOptions();
        $this->setOptions($opt);

        return $opt;

    }
}
