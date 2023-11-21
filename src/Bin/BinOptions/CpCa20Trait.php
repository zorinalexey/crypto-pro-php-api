<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateUserOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListDnOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait CpCa20Trait
{
    /**
     * Указать адрес веб-интерфейса КриптоПро УЦ
     * иначе это адрес https://cryptopro.ru/ui
     *
     * @param  string  $url Адрес веб-интерфейса КриптоПро УЦ
     * @return CreateCertOptions|CheckRegOptions|CpCa20Trait|CreateUserOptions|ListDnOptions|ListTmplOptions|PendCertOptions
     */
    final public function cpCa20(string $url): self
    {
        $this->setOptions('-cpca20 '.$url);

        return $this;
    }
}
