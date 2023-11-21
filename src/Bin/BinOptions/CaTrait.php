<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait CaTrait
{
    /**
     * Указать адрес УЦ Microsoft
     * иначе это адрес http://www.cryptopro.ru/certsrv/
     *
     * @param  string  $url Адрес веб-интерфейса КриптоПро УЦ
     * @return CaTrait|CreateCertOptions|PendCertOptions
     */
    final public function ca(string $url): self
    {
        $this->setOptions('-ca '.$url);

        return $this;
    }
}
