<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddAttrOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait AttrTrait
{
    /**
     * @return SignOptions|AttrTrait|AddAttrOptions|AddSignOptions
     */
    final public function attr(string $oidAlg, string $file): self
    {
        $this->setOptions('-attr "'.$oidAlg.','.$file.'"');

        return $this;
    }
}
