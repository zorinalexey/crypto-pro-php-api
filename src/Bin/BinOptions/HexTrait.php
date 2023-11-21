<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\HashOptions;

trait HexTrait
{
    /**
     * @return HashOptions|HexTrait
     */
    final public function hex(string $hashFunction): self
    {
        $this->setOptions('-hex '.$hashFunction);

        return $this;
    }
}
