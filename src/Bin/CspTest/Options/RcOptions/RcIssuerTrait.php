<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions;

trait RcIssuerTrait
{
    /**
     * @return $this
     */
    final public function issuer(string $certFilePath): self
    {
        $this->setOptions('-issuer "'.$certFilePath.'"');

        return $this;
    }
}
