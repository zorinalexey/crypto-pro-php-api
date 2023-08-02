<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait HexTrait
{
    /**
     * @param string $hashFunction
     * @return \CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\HashOptions|HexTrait
     */
    final public function hex(string $hashFunction): self
    {
        $this->setOptions('-hex ' . $hashFunction);

        return $this;
    }
}