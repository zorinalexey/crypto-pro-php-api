<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait CadesTsaTrait
{
    /**
     * Служба штампов времени для CAdES-X Long Type 1, CAdES-T
     *
     * @return CadesTsaTrait|AddSignfOptions|AddSignOptions|SignfOptions|SignOptions
     */
    final public function file(string $url): self
    {
        $this->setOptions('-cadestsa "'.$url.'"');

        return $this;
    }
}
