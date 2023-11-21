<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait DerTrait
{
    /**
     * Использовать для представления сертификата или CRL кодировку DER (значение по умолчанию).
     *
     * @return SignOptions|DerTrait|Options|AddSignfOptions|CopyCertOptions|CreateRequestOptions|CspCertOptions|EncryptOptions|SignfOptions
     */
    final public function der(): self
    {
        $this->setOptions(' -der');

        return $this;
    }
}
