<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait HashAlgTrait
{

    /**
     * Задать алгоритм хеширования
     * @param string $alg Алгоритм хеширования:
     * 1.2.643.2.2.9 для ГОСТ Р 34.11-94
     * 1.2.643.7.1.1.2.2 для ГОСТ Р 34.11-2012 256 bit
     * 1.2.643.7.1.1.2.3 для ГОСТ Р 34.11-2012 512 bit
     * @return CreateRequestOptions|HashAlgTrait|AddSignOptions|CreateCertOptions|SignfOptions|SignOptions
     */
    final public function hashAlg(string $alg): self
    {
        $this->setOptions("-hashalg " . $alg);
       
        return $this;
    }
}