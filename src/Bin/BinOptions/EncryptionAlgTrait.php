<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;

trait EncryptionAlgTrait
{

    /**
     * Алгоритм шифрования
     * @param string $alg
     * @return EncryptionAlgTrait|EncryptOptions
     */
    final public function encryptionalg(string $alg): self
    {
        $this->setOptions('-encryptionalg ' . $alg);

        return $this;
    }
}