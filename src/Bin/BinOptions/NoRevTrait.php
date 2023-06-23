<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoRevTrait
{
    /**
     * Не проверять сертификаты в цепочке на предмет отозванности
     * @return $this
     */
    final public function norev(): self
    {
        $this->setOptions('-norev');
        return $this;
    }
}