<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AuthAttrTrait
{
    /**
     * Добавить подписанный атрибут в подпись
     * @return $this
     */
    final public function authattr(): self
    {
        $this->setOptions('-authattr');
        return $this;
    }
}