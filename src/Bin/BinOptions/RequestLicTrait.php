<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;

trait RequestLicTrait
{
    /**
     * Запросить сертификат со встроенной лицензией на Крипто-Про CSP;
     * УЦ должен быть настроен на выдачу таких сертификатов
     * @return RequestLicTrait|CreateCertOptions|CreateRequestOptions
     */
    final public function requestLic(): self
    {
        $this->setOptions('-requestlic');

        return $this;
    }
}