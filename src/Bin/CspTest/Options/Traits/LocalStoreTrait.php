<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\StoreOptions;

trait LocalStoreTrait
{

    /**
     * @return StoreOptions
     */
    final public function localStore(): StoreOptions
    {
        $opt = new StoreOptions('MY');
        $this->setOptions($opt);
        return $opt;
    }
}