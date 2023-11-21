<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;

trait CertUsageTrait
{
    /**
     * Задать назначения сертификата <OID>
     *
     * @param  string  $usage Назначение сертификата
     * @return CreateRequestOptions|CertUsageTrait|CreateCertOptions
     */
    final public function certUsage(string $usage): self
    {
        $this->setOptions($usage, '-certusage', ',');

        return $this;
    }
}
