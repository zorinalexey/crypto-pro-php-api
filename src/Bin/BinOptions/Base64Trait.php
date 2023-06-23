<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait Base64Trait
{

    /**
     * Использовать для представления сертификата или CRL кодировку base64.
     * @return $this
     */
    final public function base64(): self
    {
        $this->setOptions('-base64');
        return $this;
    }
}