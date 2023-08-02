<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\StoreOptions;

trait UserCertTrait
{

    final public function userCert(): StoreOptions
    {
        $opt = new StoreOptions('cert');
        $this->setOptions($opt);

        return $opt;
    }
}