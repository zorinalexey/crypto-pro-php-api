<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;

trait ExportTrait
{
    /**
     * Пометить ключи как экспортируемые
     *
     * @return CreateRequestOptions|ExportTrait|CreateCertOptions
     */
    final public function export(): self
    {
        $this->setOptions('-exprt');

        return $this;
    }
}
