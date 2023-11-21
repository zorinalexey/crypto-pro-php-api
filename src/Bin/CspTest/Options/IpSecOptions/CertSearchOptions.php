<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThumbprintTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

class CertSearchOptions extends Options
{
    use DnTrait, SilentTrait, ThumbprintTrait;
    use GlobalOptionsTrait;
}
