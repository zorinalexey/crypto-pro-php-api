<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AttrTrait
{
    final public function attr(string $oidAlg, string $file): self
    {
        $this->setOptions('-attr "' . $oidAlg . ',' . $file . '"');
        return $this;
    }
}