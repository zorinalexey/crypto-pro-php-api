<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait StampChainCheckTrait
{
    /**
     * Проверить цепочку сертификата в штампе времени
     * @return SignOptions|StampChainCheckTrait|AddSignfOptions|AddSignOptions|SignfOptions
     */
    final public function stampchaincheck(): self
    {
        $this->setOptions('-stampchaincheck');
       
        return $this;
    }
}