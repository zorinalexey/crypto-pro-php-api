<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesBesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DirTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FextTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoCadesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SignTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThreadsTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\XLongType1Trait;

final class VSignOptions extends Options
{
    use CadesBesTrait, CadestTrait, DirTrait, SignTypeTrait, XLongType1Trait;
    use FextTrait, KpsOptions, NoCadesTrait, ThreadsTrait;
}
