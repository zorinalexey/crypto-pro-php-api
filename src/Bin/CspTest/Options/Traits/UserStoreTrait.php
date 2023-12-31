<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\StoreOptions;

trait UserStoreTrait
{
    final public function userStore(): StoreOptions
    {
        $opt = new StoreOptions('my');
        $this->setOptions($opt);

        return $opt;
    }
}
