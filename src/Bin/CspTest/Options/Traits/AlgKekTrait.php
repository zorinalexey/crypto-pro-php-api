<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait AlgKekTrait
{
    /**
     * @return $this
     */
    final public function algKek(string $alg): self
    {
        $this->setOptions('-alg_kek '.$alg);

        return $this;
    }
}
