<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DfTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\EndStoreNameTrait;

class CopyCertOptions extends Options
{
    use KpsOptions, DerTrait, DmTrait, DuTrait, DfTrait, EndStoreNameTrait;
}