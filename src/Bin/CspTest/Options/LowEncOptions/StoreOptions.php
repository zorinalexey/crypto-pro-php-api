<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\KpsOptions;

final class StoreOptions extends Options
{

    public function __construct(string|null $store = null)
    {
        if ($store) {
            $this->setOptions('-' . $store);
        }
    }

    use KpsOptions;
}