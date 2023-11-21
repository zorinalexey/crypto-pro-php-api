<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;

trait DfTrait
{
    /**
     * Использовать в качестве хранилища файл сертификата
     *
     * @return DfTrait|CopyCertOptions|CspCertOptions
     */
    final public function df(string $certFile): self
    {
        $this->setOptions('-df "'.$certFile.'"');

        return $this;
    }
}
