<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CertMgr;

use CloudCastle\CryptoProPhpApi\Abstracts\Options as AbstractOptions;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AllTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AtSignatureTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\Base64Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertificateTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ChainTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CrlTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FileTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeepExportableTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeyIdTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\LocationTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PfxTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\Pkcs10Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProtectedTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvnameTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SrcTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StdinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StoreTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TftmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThumbprintTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TraceTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\VerboseTrait;

final class Options extends AbstractOptions
{
    use AllTrait, AtSignatureTrait, Base64Trait, CertificateTrait, ChainTrait, CrlTrait, DerTrait, DestTrait, DnTrait;
    use FileTrait, KeepExportableTrait, KeyIdTrait, LocationTrait, PfxTrait, PinTrait, Pkcs10Trait, ProtectedTrait;
    use ProvnameTrait, ProvtypeTrait, SilentTrait, SrcTrait, StdinTrait, StoreTrait, ThumbprintTrait, TraceTrait;
    use TftmTrait, VerboseTrait;
}