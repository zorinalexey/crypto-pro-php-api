<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;

trait SMimeTrait
{
    /**
     * включить возможности S/MIME (только Windows)
     * @return CreateRequestOptions|SMimeTrait|CreateCertOptions
     */
    final public function smime(): self
    {
        $this->setOptions('-smime');

        return $this;
    }
}