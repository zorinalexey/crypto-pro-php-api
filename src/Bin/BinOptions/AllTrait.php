<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AllTrait
{
    /**
     * Использовать все подходящие сертификаты (CRL).
     * @return $this
     */
    final public function all(): self
    {
        $this->setOptions('-all');
        return $this;
    }
}