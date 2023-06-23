<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DirTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FileMaskTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\HexTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvnameTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;

final class HashOptions extends Options
{
    use DirTrait, ProvnameTrait, ProvtypeTrait, HexTrait, FileMaskTrait;
}