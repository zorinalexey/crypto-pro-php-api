<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait HexTrait
{

    final public function hex(string $hashFunction): self
    {
        setOptions('-hex ' . $hashFunction);
        return $this;
    }
}