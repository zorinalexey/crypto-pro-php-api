<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait HashOutTrait
{
    /**
     * @param string $file
     * @return KeySetOptions|FilterTrait
     */
    final public function hashOut(string $file): self
    {
        $this->setOptions('-hashout "' . $file . '"');
        return $this;
    }
}