<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AddChainTrait
{

    /**
     * Добавить полную цепочку сертификата в подпись
     * @return $this
     */
    final public function addChain(): self
    {
        $this->setOptions('-addchain');
        return $this;
    }
}