<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;

trait EnableInstallRootTrait
{
    /**
     * Не запрашивать разрешение на установку корневого сертификата в хранилище "Доверенные корневые центры"
     * только на UNIX с -dm
     * @return InstCertOptions|EnableInstallRootTrait|CreateCertOptions
     */
    final public function enableInstallRoot(): self
    {
        $this->setOptions('-enable-install-root');

        return $this;
    }
}