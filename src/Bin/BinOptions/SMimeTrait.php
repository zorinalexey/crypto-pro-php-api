<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait SMimeTrait
{
    /**
     * включить возможности S/MIME (только Windows)
     * @return $this
     */
    final public function smime(): self
    {
        $this->setOptions('-smime');
        return $this;
    }
}