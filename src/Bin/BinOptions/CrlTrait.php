<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait CrlTrait
{
    /**
     * Работать со списком отозванных сертификатов (CRL). (Если используется в классе CertMgr)
     * Добавить в сообщения список отозванных сертификатов (Если используется в классе CryptCp)
     *
     * @return CrlTrait|Options|AddSignOptions|SignfOptions|SignOptions
     */
    final public function crl(): self
    {
        $this->setOptions('-crl');

        return $this;
    }
}
