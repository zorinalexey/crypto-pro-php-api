<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait CadesNoSearchTrait
{
    /**
     * @return $this
     */
    final public function cadesNoSearch(): static
    {
        $this->setOptions('-cades_nosearch');

        return $this;
    }
}
