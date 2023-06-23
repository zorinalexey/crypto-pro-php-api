<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait RequestIdTrait
{

    /**
     * Указать идентификатор запроса на сертификат
     * @param string $id Идентификатор запроса
     * @return $this
     */
    final public function requestId(string $id): self
    {
        $this->setOptions('-requestid ' . $id);
        return $this;
    }
}