<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait AlgTrait
{

    /**
     * @param string $alg
     * @return $this
     */
    final public function alg(string $alg): self
    {
        $this->setOptions('-alg ' . $alg);

        return $this;
    }
}