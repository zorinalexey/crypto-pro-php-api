<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait KmTrait
{
    /**
     * использовать контейнер компьютера (LOCAL_MACHINE)
     *
     * @return CspCertOptions|KmTrait|CreateCertOptions|CreateRequestOptions|InstCertOptions|PendCertOptions
     */
    final public function km(): self
    {
        $this->setOptions('-km');

        return $this;
    }
}
