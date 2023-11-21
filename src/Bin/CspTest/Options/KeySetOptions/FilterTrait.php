<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait FilterTrait
{
    /**
     * @return KeySetOptions|FilterTrait
     */
    final public function filter(string $filter): self
    {
        $this->setOptions('-filter '.$filter);

        return $this;
    }
}
