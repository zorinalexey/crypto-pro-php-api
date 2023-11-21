<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FileMaskTrait
{
    /**
     * Маска для отбора хэшируемых файлов
     */
    final public function fileMask(string $mask): void
    {
        $this->setOptions($mask);
    }
}
