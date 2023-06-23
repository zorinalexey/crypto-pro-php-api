<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait EnableInstallRootTrait
{
    /**
     * Не запрашивать разрешение на установку корневого сертификата в хранилище "Доверенные корневые центры"
     * только на UNIX с -dm
     * @return $this
     */
    final public function enableInstallRoot(): self
    {
        $this->setOptions('-enable-install-root');
        return $this;
    }
}