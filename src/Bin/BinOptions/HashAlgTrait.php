<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait HashAlgTrait
{

    /**
     * Задать алгоритм хеширования
     * @param string $alg Алгоритм хеширования:
     * 1.2.643.2.2.9 для ГОСТ Р 34.11-94
     * 1.2.643.7.1.1.2.2 для ГОСТ Р 34.11-2012 256 bit
     * 1.2.643.7.1.1.2.3 для ГОСТ Р 34.11-2012 512 bit
     * @return $this
     */
    final public function hashAlg(string $alg): self
    {
        $this->setOptions("-hashalg " . $alg);
        return $this;
    }
}