<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait KTrait
{

    /**
     * @param string $n
     * @return KTrait
     */
    final public function k(string $n): self
    {
        $this->setOptions('-k ' . $n);
        return $this;
    }
}