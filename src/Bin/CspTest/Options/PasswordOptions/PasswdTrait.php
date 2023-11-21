<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait PasswdTrait
{
    /**
     * @return PasswdTrait|PasswordOptions
     */
    final public function password(string $pin): self
    {
        $this->setOptions('-passwd '.$pin);

        return $this;
    }
}
