<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ProvnameTrait
{


    /**
     * Имя провайдера.
     * @param string $name Имя провайдера.
     * @return $this
     */
    final public function provname(string $name): self
    {
        $this->setOptions('-provname "' . $name . '"');
        return $this;
    }
}