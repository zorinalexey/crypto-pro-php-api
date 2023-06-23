<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FileTrait
{

    /**
     * Путь к файлу с сертификатом или CRL
     * (может быть DER или base64-закодированным или сериализованным хранилищем).
     * @param string $path
     * @return $this
     */
    final public function file(string $path): self
    {
        $this->setOptions('-file "' . $path . '"');
        return $this;
    }
}