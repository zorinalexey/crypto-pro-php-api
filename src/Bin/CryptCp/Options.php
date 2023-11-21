<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp;

use CloudCastle\CryptoProPhpApi\Abstracts\Options as AbstractOptions;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AllTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThumbprintTrait;

final class Options extends AbstractOptions
{
    use AllTrait, DnTrait, ThumbprintTrait;
}
