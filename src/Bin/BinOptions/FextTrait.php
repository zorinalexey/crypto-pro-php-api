<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FextTrait
{

    /**
     * Задать расширение для сообщений
     * @param string $ext
     * @return $this
     */
    final public function fext(string $ext): self
    {
        $this->setOptions("-fext ." . trim($ext, '.'));
        return $this;
    }
}