<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\DefProv\SetDefOptions;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\DefProvOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\AbsorbParamsOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertKeyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions\DefProviderOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\Certificate;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait ProvtypeTrait
{
    /**
     * Тип провайдера (значение по умолчанию 75).
     *
     * @param  int|null  $type Тип провайдера (значение по умолчанию 75).
     * @return CreateRequestOptions|ProvtypeTrait|Options|SetDefOptions|DefProvOptions|CreateCertOptions|CspCertOptions|HashOptions|InstCertOptions|PendCertOptions|AbsorbParamsOptions|CertKeyOptions|DefProviderOptions|EnumOptions|\CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\HashOptions|KeySetOptions|Certificate|OidOptions|PasswordOptions|PerfOptions
     */
    final public function provtype(int $type = null): self
    {
        $type ??= 75;
        $this->setOptions('-provtype '.$type);

        return $this;
    }
}
