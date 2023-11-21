<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait AddChainTrait
{
    /**
     * Добавить полную цепочку сертификата в подпись
     *
     * @return AddChainTrait|SignfOptions|SignOptions
     */
    final public function addChain(): self
    {
        $this->setOptions('-addchain');

        return $this;
    }
}
