<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

trait XLongType1Trait
{
    /**
     * Создать подписи CAdES-X Long Type 1
     * @return SignOptions|XLongType1Trait|AddSignfOptions|AddSignOptions|SignfOptions|VerifyOptions|VSignOptions
     */
    public function xlongtype1(): self
    {
        $this->setOptions('-xlongtype1');

        return $this;
    }
}