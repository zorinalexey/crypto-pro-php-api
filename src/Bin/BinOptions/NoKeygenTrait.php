<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait NoKeygenTrait
{
    /**
     * Использовать существующие ключи из указанного контейнера -cont (если контейнер не указан, выбор из списка)
     * @return $this
     */
    final public function noKeygen(): self
    {
        $this->setOptions('-nokeygen');
        return $this;
    }
}