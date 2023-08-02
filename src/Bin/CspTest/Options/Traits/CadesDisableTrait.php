<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait CadesDisableTrait
{

    /**
     * @return $this
     */
    final public function cadesDisable(): static
    {
        $this->setOptions('-cades_disable');

        return $this;
    }
}