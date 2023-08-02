<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;

trait FileTrait
{

    /**
     * Путь к файлу с сертификатом или CRL
     * (может быть DER или base64-закодированным или сериализованным хранилищем).
     * @param string $path
     * @return CreateCertOptions|FileTrait|Options
     */
    final public function file(string $path): self
    {
        $this->setOptions('-file "' . $path . '"');

        return $this;
    }
}