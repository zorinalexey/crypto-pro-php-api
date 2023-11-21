<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;

trait NoKeygenTrait
{
    /**
     * Использовать существующие ключи из указанного контейнера -cont (если контейнер не указан, выбор из списка)
     *
     * @return CreateRequestOptions|NoKeygenTrait|CreateCertOptions
     */
    final public function noKeygen(): self
    {
        $this->setOptions('-nokeygen');

        return $this;
    }
}
