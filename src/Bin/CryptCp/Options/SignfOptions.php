<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AddChainTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesBesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesTsaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CrlTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DirTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FextTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FileMaskTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\HashAlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeepBadFilesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoStampCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SignTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StampChainCheckTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StrictTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThreadsTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\XLongType1Trait;

final class SignfOptions extends Options
{
    use AddChainTrait, CertTrait, CrlTrait, DerTrait, DirTrait, FileMaskTrait, KpsOptions, SignTypeTrait, StrictTrait;
    use CadesBesTrait, CadesTsaTrait, CadestTrait, HashAlgTrait, NoStampCertTrait, StampChainCheckTrait, XLongType1Trait;
    use FextTrait, KeepBadFilesTrait, PinTrait, ThreadsTrait;
}
