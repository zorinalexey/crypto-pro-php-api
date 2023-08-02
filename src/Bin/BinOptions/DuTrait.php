<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait DuTrait
{

    /**
     * Скопировать в хранилище пользователя (CURRENT_USER)
     * @return CspCertOptions|DuTrait|CopyCertOptions|CreateCertOptions|InstCertOptions|PendCertOptions
     */
    final public function du(): self
    {
        $this->setOptions('-du');

        return $this;
    }
}