<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait FQcnTrait
{
    /**
     * @return KeySetOptions|FQcnTrait
     */
    final public function fQcn(): self
    {
        $this->setOptions('-fqcn');

        return $this;
    }
}
