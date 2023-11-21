<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait UniqueTrait
{
    /**
     * @return UniqueTrait|KeySetOptions
     */
    final public function unique(): self
    {
        $this->setOptions('-unique');

        return $this;
    }
}
