<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;

trait VerAllTrait
{
    /**
     * Проверять все подписи (иначе – только подписи авторов из КПС)
     * @return VerAllTrait|VerifyOptions
     */
    final public function verAll(): self
    {
        $this->setOptions('-verall ');

        return $this;
    }
}