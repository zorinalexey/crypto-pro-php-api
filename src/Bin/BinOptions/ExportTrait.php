<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ExportTrait
{
    /**
     * Пометить ключи как экспортируемые
     * @return $this
     */
    final public function export(): self
    {
        $this->setOptions('-exprt');
        return $this;
    }
}