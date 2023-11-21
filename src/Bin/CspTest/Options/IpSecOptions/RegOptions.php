<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

class RegOptions extends Options
{
    use GlobalOptionsTrait;
    use KeyTrait, ListTrait, MyCertTrait, OtherCertTrait, SavePinTrait, SilentTrait, TCertTrait;
}
