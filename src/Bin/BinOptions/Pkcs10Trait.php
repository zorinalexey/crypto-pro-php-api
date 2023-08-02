<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait Pkcs10Trait
{
    /**
     * Работать с PKCS#10-файлом.
     * @return Pkcs10Trait|Options
     */
    final public function pkcs10(): self
    {
        $this->setOptions('-pkcs10');

        return $this;
    }
}