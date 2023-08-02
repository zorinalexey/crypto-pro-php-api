<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

trait NoCadesTrait
{
    /**
     * Запретить использование вложенных в подписи доказательств
     * @return NoCadesTrait|VerifyOptions|VSignOptions
     */
    final public function nocades(): self
    {
        $this->setOptions('-nocades');

        return $this;
    }
}