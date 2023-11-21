<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesBesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesTsaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DirTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FextTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FileMaskTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoStampCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SignTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StampChainCheckTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThreadsTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\XLongType1Trait;

class AddSignfOptions extends Options
{
    use CadesBesTrait, CadesTsaTrait, CadestTrait, FextTrait, PinTrait, ThreadsTrait, XLongType1Trait;
    use CertTrait, DerTrait, DirTrait, FileMaskTrait, KpsOptions, NoStampCertTrait, SignTypeTrait, StampChainCheckTrait;
}
