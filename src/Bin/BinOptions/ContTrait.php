<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait ContTrait
{
    /**
     * Задать имя ключевого контейнера
     * @param string $container
     * @return InstCertOptions|ContTrait|CreateCertOptions|CreateRequestOptions|PendCertOptions
     */
    final public function container(string $container): self
    {
        $this->setOptions('-cont "' . $container . '"');

        return $this;
    }
}