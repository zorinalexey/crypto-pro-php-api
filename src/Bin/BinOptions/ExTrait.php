<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ExTrait
{

    /**
     * Использовать ключ для обмена зашифрованными данными
     * @return $this
     */
    final public function ex(): self
    {
        $this->setOptions('-ex');
        return $this;
    }
}