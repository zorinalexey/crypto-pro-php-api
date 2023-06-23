<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AddFieldDnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CpCa20Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CpCaTrait;

class CreateUserOptions extends Options
{
    use CpCaTrait, CpCa20Trait, AddFieldDnTrait;
}