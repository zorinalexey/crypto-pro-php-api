<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;

trait BothTrait
{
    /**
     * Создать или использовать ключ для обмена с возможностью подписи
     *
     * @return CreateCertOptions|BothTrait
     */
    final public function both(): self
    {
        $this->setOptions('-both');

        return $this;
    }
}
