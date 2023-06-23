<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

final class MiniCaCrlOptions extends Options
{
    use FromTrait, UntilTrait, CNumberTrait, StoreTrait, IssuerTrait, SilentTrait;
    use GlobalOptionsTrait;
}