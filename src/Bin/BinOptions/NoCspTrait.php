<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoCspTrait
{
    /**
     * Не устанавливать сертификат в контейнер
     * @return $this
     */
    final public function noCsp(): self
    {
        $this->setOptions('-nocsp');
        return $this;
    }
}