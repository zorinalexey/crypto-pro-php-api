<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait ChainTrait
{
    /**
     * Отображать цепочку сертификатов.
     *
     * @return ChainTrait|Options
     */
    final public function chain(): self
    {
        $this->setOptions('-chain');

        return $this;
    }
}
