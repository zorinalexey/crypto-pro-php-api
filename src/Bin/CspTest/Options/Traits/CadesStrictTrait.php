<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait CadesStrictTrait
{
    /**
     * @return $this
     */
    final public function cadesStrict(): static
    {
        $this->setOptions('-cades_strict');

        return $this;
    }
}
