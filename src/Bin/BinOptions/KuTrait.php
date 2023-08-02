<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait KuTrait
{

    /**
     * Использовать контейнер пользователя (CURRENT_USER)
     * @return CspCertOptions|KuTrait|CreateCertOptions|CreateRequestOptions|InstCertOptions|PendCertOptions
     */
    final public function ku(): self
    {
        $this->setOptions('-ku');

        return $this;
    }
}