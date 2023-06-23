<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait HardRngTrait
{

    /**
     * @return KeySetOptions|HardRngTrait
     */
    final public function hardRng(): self
    {
        $this->setOptions('-hard_rng');
        return $this;
    }
}