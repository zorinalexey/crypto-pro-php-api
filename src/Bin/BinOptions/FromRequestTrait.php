<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;

trait FromRequestTrait
{
    /**
     * @return InstCertOptions|FromRequestTrait
     */
    final public function fromRequest(): self
    {
        $this->setOptions('-from_request');

        return $this;
    }
}