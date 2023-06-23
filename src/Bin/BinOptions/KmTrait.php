<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait KmTrait
{

    /**
     * использовать контейнер компьютера (LOCAL_MACHINE)
     * @return $this
     */
    final public function km(): self
    {
        $this->setOptions('-km');
        return $this;
    }
}