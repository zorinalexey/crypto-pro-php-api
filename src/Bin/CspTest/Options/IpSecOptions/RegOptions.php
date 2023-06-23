<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

class RegOptions extends Options
{
    use SilentTrait, MyCertTrait, TCertTrait, ListTrait, OtherCertTrait, KeyTrait, SavePinTrait;
    use GlobalOptionsTrait;
}