<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait SgTrait
{

    /**
     * Использовать контейнер пользователя (CURRENT_USER)
     * @return $this
     */
    final public function sg(): self
    {
        $this->setOptions('-sg');
        return $this;
    }
}