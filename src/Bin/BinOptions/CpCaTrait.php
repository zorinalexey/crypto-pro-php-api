<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateUserOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListDnOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait CpCaTrait
{
    /**
     * Указать адрес веб-интерфейса КриптоПро УЦ
     * иначе это адрес https://cryptopro.ru/ui
     * @param string $url Адрес веб-интерфейса КриптоПро УЦ
     * @return ListDnOptions|CheckRegOptions|CpCaTrait|CreateCertOptions|CreateUserOptions|PendCertOptions
     */
    final public function cpCa(string $url): self
    {
        $this->setOptions('-cpca ' . $url);

        return $this;
    }
}