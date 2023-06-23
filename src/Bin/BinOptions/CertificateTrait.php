<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CertificateTrait
{

    /**
     * Работать с сертификатом
     * @return $this
     */
    final public function certificate(): self
    {
        $this->setOptions('-certificate');
        return $this;
    }
}