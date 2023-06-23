<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoStampCertTrait
{
    /**
     * Не требовать включения в штамп сертификата службы штампов времени
     * @return $this
     */
    final public function nostampcert(): self
    {
        $this->setOptions('-nostampcert');
        return $this;
    }
}