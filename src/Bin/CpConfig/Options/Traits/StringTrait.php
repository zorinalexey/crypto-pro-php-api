<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits;

use CloudCastle\CryptoProPhpApi\Abstracts\Bin;

trait StringTrait
{
    final public function string(string $location): void
    {
        $this->setOptions('string '.$location);
        $this->setOptions(
            Bin::APP_BASE_PATH.DIRECTORY_SEPARATOR.'dsrf'.
            DIRECTORY_SEPARATOR.trim($location, DIRECTORY_SEPARATOR)
        );
    }
}
