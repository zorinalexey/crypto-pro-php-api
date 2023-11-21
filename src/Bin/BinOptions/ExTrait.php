<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;

trait ExTrait
{
    /**
     * Использовать ключ для обмена зашифрованными данными
     *
     * @return CspCertOptions|ExTrait|CreateCertOptions|CreateRequestOptions
     */
    final public function ex(): self
    {
        $this->setOptions('-ex');

        return $this;
    }
}
