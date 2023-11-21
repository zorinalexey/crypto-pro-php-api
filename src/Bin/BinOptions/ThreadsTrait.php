<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;

trait ThreadsTrait
{
    /**
     * Число параллельно работающих потоков (по умолчанию 1)
     *
     * @return SignfOptions|ThreadsTrait|AddSignfOptions|VSignOptions|KeySetOptions
     */
    final public function threads(int $threads = null): self
    {
        $threads ??= 1;
        $this->setOptions('-threads '.$threads);

        return $this;
    }
}
