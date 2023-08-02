<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

trait CadesBesTrait
{
    /**
     * создать подписи CAdES-BES
     * @return SignOptions|CadesBesTrait|AddSignfOptions|AddSignOptions|SignfOptions|VerifyOptions|VSignOptions
     */
    public function cadesbes(): self
    {
        $this->setOptions('-cadesbes');

        return $this;
    }
}