<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait XLongType1Trait
{
    /**
     * Создать подписи CAdES-X Long Type 1
     * @return $this
     */
    public function xlongtype1(): self
    {
        $this->setOptions('-xlongtype1');
        return $this;
    }
}