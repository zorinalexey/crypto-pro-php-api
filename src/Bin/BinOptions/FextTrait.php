<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

trait FextTrait
{
    /**
     * Задать расширение для сообщений
     *
     * @return SignOptions|FextTrait|AddSignfOptions|AddSignOptions|DelSignOptions|SignfOptions|VerifyOptions|VSignOptions
     */
    final public function fext(string $ext): self
    {
        $this->setOptions('-fext .'.trim($ext, '.'));

        return $this;
    }
}
