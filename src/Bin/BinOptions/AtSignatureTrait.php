<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AtSignatureTrait
{

    /**
     * Использовать закрытый ключ AT_SIGNATURE вместо AT_KEYEXCHANGE.
     * @return $this
     */
    final public function atSignature(): self
    {
        $this->setOptions('-at_signature');
        return $this;
    }
}