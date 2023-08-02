<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait DmTrait
{

    /**
     * Скопировать в хранилище компьютера (LOCAL_MACHINE)
     * @return CspCertOptions|DmTrait|CopyCertOptions|CreateCertOptions|InstCertOptions|PendCertOptions
     */
    final public function dm(): self
    {
        $this->setOptions('-dm');

        return $this;
    }
}