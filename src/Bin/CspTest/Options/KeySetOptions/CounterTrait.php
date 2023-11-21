<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait CounterTrait
{
    /**
     * @return KeySetOptions|CounterTrait
     */
    final public function counter(int $num): self
    {
        $this->setOptions('-counter '.$num);

        return $this;
    }
}
