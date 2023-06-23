<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\EnableInstallRootTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FromRequestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoCspTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvnameTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;

class InstCertOptions extends Options
{
    use ProvtypeTrait, ProvnameTrait, ContTrait, KuTrait, KmTrait, DmTrait, DuTrait, NoCspTrait, FromRequestTrait;
    use PinTrait, EnableInstallRootTrait;
}