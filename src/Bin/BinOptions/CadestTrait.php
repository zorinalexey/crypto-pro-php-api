<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

trait CadestTrait
{
    /**
     * Создать подписи CAdES-T
     *
     * @return CadestTrait|AddSignfOptions|AddSignOptions|SignfOptions|SignOptions|VerifyOptions|VSignOptions
     */
    public function cadest(): self
    {
        $this->setOptions('-cadest');

        return $this;
    }
}
