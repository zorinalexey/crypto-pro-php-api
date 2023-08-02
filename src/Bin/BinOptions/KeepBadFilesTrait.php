<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DecryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;

trait KeepBadFilesTrait
{

    /**
     * Не удалять выходной файл при ошибке
     * @return KeepBadFilesTrait|DecryptOptions|EncryptOptions|SignfOptions|SignOptions|VerifyOptions
     */
    final public function keepbadfiles(): self
    {
        $this->setOptions('-keepbadfiles');

        return $this;
    }
}