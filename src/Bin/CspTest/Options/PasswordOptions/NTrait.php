<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait NTrait
{

    /**
     * @param string $n
     * @return PasswordOptions|NTrait
     */
    final public function n(string $n): self
    {
        $this->setOptions('-n ' . $n);

        return $this;
    }
}