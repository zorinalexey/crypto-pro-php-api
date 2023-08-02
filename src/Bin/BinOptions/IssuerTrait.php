<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddAttrOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DecryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\StoreOptions;

trait IssuerTrait
{

    /**
     * Критерии поиска для сертификата.
     * Если более одного сертификата удовлетворяют заданным критериям,
     * пользователю будет предложено выбрать один из найденных.
     * @param string $searchString
     * @return AddAttrOptions|IssuerTrait|AddSignfOptions|AddSignOptions|CopyCertOptions|CreateCertOptions|DecryptOptions|DelCertOptions|DelSignOptions|EncryptOptions|ListTmplOptions|PendCertOptions|SignfOptions|SignOptions|VerifyOptions|VSignOptions|StoreOptions
     */
    final public function issuer(string $searchString): self
    {
        $this->setOptions("-issuer '" . $searchString . "'");

        return $this;
    }
}