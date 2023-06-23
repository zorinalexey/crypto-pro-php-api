<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait VerAllTrait
{
    /**
     * Проверять все подписи (иначе – только подписи авторов из КПС)
     * @return $this
     */
    final public function verAll(): self
    {
        $this->setOptions('-verall ');
        return $this;
    }
}