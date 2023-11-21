<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThumbprintTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

class RcStoreOption extends Options
{
    use DnTrait, RcIssuerTrait, ThumbprintTrait;
    use GlobalOptionsTrait;
}
