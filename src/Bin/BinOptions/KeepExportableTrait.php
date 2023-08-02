<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait KeepExportableTrait
{

    /**
     * Пометить импортированные ключи как экспортируемые.
     * @return KeepExportableTrait|Options
     */
    final public function keepExportable(): self
    {
        $this->setOptions('-keep_exportable');

        return $this;
    }
}