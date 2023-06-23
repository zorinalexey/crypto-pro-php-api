<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CadesTsaTrait
{
    /**
     * Служба штампов времени для CAdES-X Long Type 1, CAdES-T
     * @param string $url
     * @return $this
     */
    final public function file(string $url): self
    {
        $this->setOptions('-cadestsa "' . $url . '"');
        return $this;
    }
}