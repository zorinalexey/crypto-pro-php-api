<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ChainTrait
{

    /**
     * Отображать цепочку сертификатов.
     * @return $this
     */
    final public function chain(): self
    {
        $this->setOptions('-chain');
        return $this;
    }
}