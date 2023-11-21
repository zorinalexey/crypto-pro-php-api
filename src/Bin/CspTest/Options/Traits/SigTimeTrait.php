<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait SigTimeTrait
{
    /**
     * @return $this
     */
    final public function sigTime(): static
    {
        $this->setOptions('-sigtime');

        return $this;
    }
}
