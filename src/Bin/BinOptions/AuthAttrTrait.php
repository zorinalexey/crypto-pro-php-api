<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait AuthAttrTrait
{
    /**
     * Добавить подписанный атрибут в подпись
     * @return AddSignOptions|AuthAttrTrait|SignOptions
     */
    final public function authattr(): self
    {
        $this->setOptions('-authattr');
       
        return $this;
    }
}