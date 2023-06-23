<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CpCaTrait
{
    /**
     * Указать адрес веб-интерфейса КриптоПро УЦ
     * иначе это адрес https://cryptopro.ru/ui
     * @param string $url Адрес веб-интерфейса КриптоПро УЦ
     * @return $this
     */
    final public function cpCa(string $url): self
    {
        $this->setOptions('-cpca ' . $url);
        return $this;
    }
}