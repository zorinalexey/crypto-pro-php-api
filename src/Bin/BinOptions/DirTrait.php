<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

trait DirTrait
{
    /**
     * Папка для файлов со значениями хэш-функции (по умолчанию текущая)
     *
     * @return SignfOptions|DirTrait|AddSignfOptions|HashOptions|VSignOptions
     */
    final public function dir(string $path): self
    {
        $this->setOptions('-dir "'.$path.'"');

        return $this;
    }
}
