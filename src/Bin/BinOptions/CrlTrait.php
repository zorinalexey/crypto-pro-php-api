<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CrlTrait
{

    /**
     * Работать со списком отозванных сертификатов (CRL). (Если используется в классе CertMgr)
     * Добавить в сообщения список отозванных сертификатов (Если используется в классе CryptCp)
     * @return $this
     */
    final public function crl(): self
    {
        $this->setOptions('-crl');
        return $this;
    }
}