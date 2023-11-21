<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;

trait KeySizeTrait
{
    /**
     * Установить длину ключа
     *
     * @param  int  $size Длинна ключа
     * @return KeySizeTrait|CreateCertOptions|CreateRequestOptions
     */
    final public function keySize(int $size): self
    {
        $this->setOptions('-keysize '.$size);

        return $this;
    }
}
