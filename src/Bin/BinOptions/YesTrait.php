<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait YesTrait
{

    /**
     * Использовать контейнер пользователя (CURRENT_USER)
     * @return $this
     */
    final public function yes(): self
    {
        $this->setOptions('-yes');
        return $this;
    }
}