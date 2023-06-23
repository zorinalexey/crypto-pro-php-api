<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DuTrait
{

    /**
     * Скопировать в хранилище пользователя (CURRENT_USER)
     * @return $this
     */
    final public function du(): self
    {
        $this->setOptions('-du');
        return $this;
    }
}