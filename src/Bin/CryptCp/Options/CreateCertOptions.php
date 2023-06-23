<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\BothTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertUsageTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ClientCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CpCa20Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CpCaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\EnableInstallRootTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ExportTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ExTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ExtTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FiLeidTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FileTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\HashAlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeySizeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KuTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoCspTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoKeygenTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvnameTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\RdnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\RequestLicTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SMimeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TmplTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TokenTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TPasswordTrait;

class CreateCertOptions extends Options
{
    use RdnTrait, ProvtypeTrait, ProvnameTrait, ContTrait, NoKeygenTrait, ExportTrait, KeySizeTrait, ExTrait, SgTrait;
    use BothTrait, KuTrait, KmTrait, HashAlgTrait, CertUsageTrait, CpCaTrait, CpCa20Trait, SMimeTrait, RequestLicTrait;
    use TokenTrait, TPasswordTrait, ClientCertTrait, KpsOptions, CaTrait, TmplTrait, DmTrait, DuTrait, NoCspTrait;
    use SilentTrait, PinTrait, FiLeidTrait, ExtTrait, EnableInstallRootTrait, FileTrait;
}