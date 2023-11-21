<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ClientCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CpCa20Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TokenTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TPasswordTrait;

class ListTmplOptions extends Options
{
    use ClientCertTrait, CpCa20Trait, KpsOptions, TokenTrait, TPasswordTrait;
}
