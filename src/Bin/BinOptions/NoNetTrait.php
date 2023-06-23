<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoNetTrait
{
    /**
     * использовать только кэшированные URL при построении цепочки
     * @return $this
     */
    final public function nonet(): self
    {
        $this->setOptions('-nonet');
        return $this;
    }
}