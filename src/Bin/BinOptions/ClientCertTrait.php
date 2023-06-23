<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ClientCertTrait
{

    /**
     * Использовать сертификат для аутентификации на КриптоПро УЦ
     * @return $this
     */
    final public function clientCert(): self
    {
        $this->setOptions('-clientcert');
        return $this;
    }
}