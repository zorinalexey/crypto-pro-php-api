<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ContTrait
{
    /**
     * Задать имя ключевого контейнера
     * @param string $container
     * @return $this
     */
    final public function container(string $container): self
    {
        $this->setOptions('-cont "' . $container . '"');
        return $this;
    }
}