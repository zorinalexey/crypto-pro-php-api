<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait ClientCertTrait
{

    /**
     * Использовать сертификат для аутентификации на КриптоПро УЦ
     * @return ClientCertTrait|CreateCertOptions|ListTmplOptions|PendCertOptions
     */
    final public function clientCert(): self
    {
        $this->setOptions('-clientcert');
       
        return $this;
    }
}