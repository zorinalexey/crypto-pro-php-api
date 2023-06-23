<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ClientCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CpCa20Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CpCaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FiLeidTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoCspTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvnameTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\RequestIdTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TokenTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TPasswordTrait;

class PendCertOptions extends Options
{
    use ProvtypeTrait, ProvnameTrait, ContTrait, KuTrait, KmTrait, CaTrait, CpCaTrait, CpCa20Trait, DmTrait, DuTrait;
    use FiLeidTrait, RequestIdTrait, TokenTrait, TPasswordTrait, ClientCertTrait, KpsOptions, NoCspTrait;
}