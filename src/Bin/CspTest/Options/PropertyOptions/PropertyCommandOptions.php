<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\CertSearchOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\InputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\RepeatTrait;

final class PropertyCommandOptions extends Options
{
    use AlgTrait, InputFileTrait, MachineTrait, RepeatTrait, SilentTrait, StoreNameTrait, StoreTrait;
    use GlobalOptionsTrait;

    public function cert(): CertSearchOptions
    {
        $opt = new CertSearchOptions();
        $this->setOptions('-cert');
        $this->setOptions($opt);

        return $opt;
    }
}
