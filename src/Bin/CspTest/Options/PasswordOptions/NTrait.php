<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait NTrait
{
    /**
     * @return PasswordOptions|NTrait
     */
    final public function n(string $n): self
    {
        $this->setOptions('-n '.$n);

        return $this;
    }
}
