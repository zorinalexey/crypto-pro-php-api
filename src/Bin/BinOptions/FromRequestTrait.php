<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FromRequestTrait
{
    /**
     * @return \CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions|FromRequestTrait
     */
    final public function fromRequest(): self
    {
        $this->setOptions('-from_request');

        return $this;
    }
}