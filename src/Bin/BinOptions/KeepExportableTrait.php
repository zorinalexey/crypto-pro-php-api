<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait KeepExportableTrait
{

    /**
     * Пометить импортированные ключи как экспортируемые.
     * @return $this
     */
    final public function keepExportable(): self
    {
        $this->setOptions('-keep_exportable');
        return $this;
    }
}