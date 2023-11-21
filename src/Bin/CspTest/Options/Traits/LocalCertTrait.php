<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\StoreOptions;

trait LocalCertTrait
{
    final public function localCert(): StoreOptions
    {
        $opt = new StoreOptions('CERT');
        $this->setOptions($opt);

        return $opt;
    }
}
