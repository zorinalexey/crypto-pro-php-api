<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait PinTrait
{
    /**
     * Пин-код контейнера.
     * @param string $pin Пин-код контейнера.
     * @return $this
     */
    final public function pin(string $pin): self
    {
        $this->setOptions('-pin ' . $pin);
        return $this;
    }
}