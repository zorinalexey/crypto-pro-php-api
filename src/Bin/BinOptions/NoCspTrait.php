<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait NoCspTrait
{
    /**
     * Не устанавливать сертификат в контейнер
     * @return InstCertOptions|NoCspTrait|CreateCertOptions|PendCertOptions
     */
    final public function noCsp(): self
    {
        $this->setOptions('-nocsp');

        return $this;
    }
}