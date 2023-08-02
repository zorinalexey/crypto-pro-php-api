<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AttrTrait
{
    /**
     * @param string $oidAlg
     * @param string $file
     * @return \CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions|AttrTrait|\CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddAttrOptions|\CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions
     */
    final public function attr(string $oidAlg, string $file): self
    {
        $this->setOptions('-attr "' . $oidAlg . ',' . $file . '"');

        return $this;
    }
}