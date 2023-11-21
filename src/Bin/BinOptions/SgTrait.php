<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;

trait SgTrait
{
    /**
     * Использовать контейнер пользователя (CURRENT_USER)
     *
     * @return CspCertOptions|SgTrait|CreateCertOptions|CreateRequestOptions
     */
    final public function sg(): self
    {
        $this->setOptions('-sg');

        return $this;
    }
}
