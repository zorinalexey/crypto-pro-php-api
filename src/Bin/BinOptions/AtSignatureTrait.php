<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait AtSignatureTrait
{
    /**
     * Использовать закрытый ключ AT_SIGNATURE вместо AT_KEYEXCHANGE.
     *
     * @return AtSignatureTrait|Options
     */
    final public function atSignature(): self
    {
        $this->setOptions('-at_signature');

        return $this;
    }
}
