<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

final class MiniCaCrlOptions extends Options
{
    use CNumberTrait, FromTrait, IssuerTrait, SilentTrait, StoreTrait, UntilTrait;
    use GlobalOptionsTrait;
}
