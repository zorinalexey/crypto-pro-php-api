<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;

trait AutoProvTrait
{

    /**
     * @return $this
     */
    final public function autoprov(): self
    {
        $this->setOptions('-autoprov');

        return $this;
    }
}