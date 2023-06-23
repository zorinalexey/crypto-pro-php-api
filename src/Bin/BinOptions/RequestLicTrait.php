<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait RequestLicTrait
{
    /**
     * Запросить сертификат со встроенной лицензией на Крипто-Про CSP;
     * УЦ должен быть настроен на выдачу таких сертификатов
     * @return $this
     */
    final public function requestLic(): self
    {
        $this->setOptions('-requestlic');
        return $this;
    }
}