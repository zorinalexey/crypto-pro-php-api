<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelCertOptions;

trait YesTrait
{

    /**
     * Использовать контейнер пользователя (CURRENT_USER)
     * @return DelCertOptions|YesTrait
     */
    final public function yes(): self
    {
        $this->setOptions('-yes');

        return $this;
    }
}