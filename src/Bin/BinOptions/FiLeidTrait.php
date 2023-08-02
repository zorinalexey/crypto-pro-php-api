<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait FiLeidTrait
{

    /**
     * Указать имя файла для записи идентификатора запроса в случае "отложенной выдачи" сертификата
     * @param string $file
     * @return FiLeidTrait|CreateCertOptions|PendCertOptions
     */
    final public function fiLeid(string $file): self
    {
        $this->setOptions('-fileid "' . $file . '"');

        return $this;
    }
}