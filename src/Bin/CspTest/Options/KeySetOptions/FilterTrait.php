<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait FilterTrait
{

    /**
     * @param string $filter
     * @return KeySetOptions|FilterTrait
     */
    final public function filter(string $filter): self
    {
        $this->setOptions('-filter ' . $filter);

        return $this;
    }
}