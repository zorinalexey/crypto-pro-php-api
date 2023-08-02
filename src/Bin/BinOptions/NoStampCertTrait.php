<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait NoStampCertTrait
{
    /**
     * Не требовать включения в штамп сертификата службы штампов времени
     * @return SignOptions|NoStampCertTrait|AddSignfOptions|AddSignOptions|SignfOptions
     */
    final public function nostampcert(): self
    {
        $this->setOptions('-nostampcert');

        return $this;
    }
}