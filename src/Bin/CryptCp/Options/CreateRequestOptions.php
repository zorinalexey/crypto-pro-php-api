<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertUsageTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ExportTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ExTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ExtTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\HashAlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeySizeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoKeygenTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvnameTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\RdnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\RequestLicTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SMimeTrait;

class CreateRequestOptions extends Options
{
    use RdnTrait, ProvtypeTrait, ProvnameTrait, SMimeTrait, NoKeygenTrait, ExportTrait, KeySizeTrait, HashAlgTrait;
    use ExTrait, SgTrait, KuTrait, KmTrait, ContTrait, SilentTrait, PinTrait, CertUsageTrait, RequestLicTrait, DerTrait;
    use ExtTrait;
}