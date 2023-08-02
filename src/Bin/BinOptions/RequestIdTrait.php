<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait RequestIdTrait
{

    /**
     * Указать идентификатор запроса на сертификат
     * @param string $id Идентификатор запроса
     * @return PendCertOptions|RequestIdTrait
     */
    final public function requestId(string $id): self
    {
        $this->setOptions('-requestid ' . $id);

        return $this;
    }
}