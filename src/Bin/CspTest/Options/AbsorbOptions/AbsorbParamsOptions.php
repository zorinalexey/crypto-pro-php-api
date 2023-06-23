<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\ProviderTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\MachineTrait;

class AbsorbParamsOptions extends Options
{
    use ProviderTrait, ProvtypeTrait, MachineTrait, SilentTrait, PatternTrait, AutoProvTrait, FilterByTypeTrait;
    use GlobalOptionsTrait;
}