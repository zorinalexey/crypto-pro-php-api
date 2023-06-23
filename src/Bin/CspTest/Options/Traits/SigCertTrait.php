<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait SigCertTrait
{

    /**
     * @return $this
     */
    final public function sigCert(): static
    {
        $this->setOptions('-sigcert');
        return $this;
    }
}