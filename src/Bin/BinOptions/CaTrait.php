<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CaTrait
{

    /**
     * Указать адрес УЦ Microsoft
     * иначе это адрес http://www.cryptopro.ru/certsrv/
     * @param string $url Адрес веб-интерфейса КриптоПро УЦ
     * @return $this
     */
    final public function ca(string $url): self
    {
        $this->setOptions('-ca ' . $url);
        return $this;
    }
}