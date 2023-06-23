<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait PfxTrait
{
    /**
     * Работать с PFX-файлом.
     * @return $this
     */
    final public function pfx(): self
    {
        $this->setOptions('-pfx');
        return $this;
    }
}