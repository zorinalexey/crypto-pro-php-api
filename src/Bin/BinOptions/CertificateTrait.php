<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait CertificateTrait
{

    /**
     * Работать с сертификатом
     * @return CertificateTrait|Options
     */
    final public function certificate(): self
    {
        $this->setOptions('-certificate');

        return $this;
    }
}