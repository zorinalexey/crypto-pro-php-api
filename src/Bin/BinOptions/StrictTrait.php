<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait StrictTrait
{

    /**
     * Использовать однозначное кодирование DER вместо BER
     * @return SignOptions|StrictTrait|EncryptOptions|SignfOptions
     */
    final public function strict(): self
    {
        $this->setOptions('-strict ');

        return $this;
    }
}