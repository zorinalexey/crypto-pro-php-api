<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait CertificateTrait
{

    final public function certificate(string $file): self
    {
        $this->setOptions('-certificate "' . $file . '"');
        return $this;
    }

}