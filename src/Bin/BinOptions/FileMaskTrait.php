<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FileMaskTrait
{

    /**
     * Маска для отбора хэшируемых файлов
     * @param string $mask
     * @return void
     */
    final public function fileMask(string $mask): void
    {
        $this->setOptions($mask);
    }
}