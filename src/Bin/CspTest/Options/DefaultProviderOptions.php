<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions\ClearDefaultTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions\DefProviderOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions\SetDefaultTrait;

final class DefaultProviderOptions extends Options
{
    use ClearDefaultTrait, SetDefaultTrait;
    use GlobalOptionsTrait;

    public function enum(): DefProviderOptions
    {
        $this->setOptions('-enum');
        $opt = new DefProviderOptions();
        $this->setOptions($opt);

        return $opt;
    }

    public function enumType(): DefProviderOptions
    {
        $this->setOptions('-enum_type');
        $opt = new DefProviderOptions();
        $this->setOptions($opt);

        return $opt;
    }

    public function getDefault(): DefProviderOptions
    {
        $this->setOptions('-get_def');
        $opt = new DefProviderOptions();
        $this->setOptions($opt);

        return $opt;
    }
}
