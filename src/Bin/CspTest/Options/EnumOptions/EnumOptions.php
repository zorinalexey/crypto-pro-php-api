<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContainerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\ProviderTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpDllTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpLevelTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\MachineTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\RepeatTrait;

final class EnumOptions extends Options
{
    use ProviderTrait, ProvtypeTrait, CpLevelTrait, CpDllTrait, ContainerTrait, MachineTrait, RepeatTrait, SilentTrait;
    use FlagsTrait, NoDataTrait, TypeTrait;
    use GlobalOptionsTrait;
}