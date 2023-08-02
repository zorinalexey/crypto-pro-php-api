<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait AddSigTimeTrait
{

    /**
     * @return $this
     */
    final public function addSigTime(): static
    {
        $this->setOptions('-addsigtime');

        return $this;
    }
}