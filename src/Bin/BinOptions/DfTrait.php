<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DfTrait
{

    /**
     * Использовать в качестве хранилища файл сертификата
     * @param string $certFile
     * @return $this
     */
    final public function df(string $certFile): self
    {
        $this->setOptions('-df "' . $certFile . '"');
        return $this;
    }
}