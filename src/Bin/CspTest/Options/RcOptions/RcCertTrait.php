<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions;

trait RcCertTrait
{

    /**
     * @param string $certFilePath
     * @return $this
     */
    final public function certificate(string $certFilePath): self
    {
        $this->setOptions('-cert "' . $certFilePath . '"');
        return $this;
    }
}