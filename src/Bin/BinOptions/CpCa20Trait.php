<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CpCa20Trait
{
    /**
     * Указать адрес веб-интерфейса КриптоПро УЦ
     * иначе это адрес https://cryptopro.ru/ui
     * @param string $url Адрес веб-интерфейса КриптоПро УЦ
     * @return $this
     */
    final public function cpCa20(string $url): self
    {
        $this->setOptions('-cpca20 ' . $url);
        return $this;
    }
}