<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait AutoContTrait
{

    /**
     * @return $this
     */
    final public function autoCont(): self
    {
        $this->setOptions('-autocont');

        return $this;
    }
}