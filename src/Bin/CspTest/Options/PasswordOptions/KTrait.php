<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait KTrait
{
    /**
     * @return KTrait
     */
    final public function k(string $n): self
    {
        $this->setOptions('-k '.$n);

        return $this;
    }
}
