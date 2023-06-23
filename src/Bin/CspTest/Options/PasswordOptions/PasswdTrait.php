<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait PasswdTrait
{

    /**
     * @param string $pin
     * @return PasswdTrait|PasswordOptions
     */
    final public function password(string $pin): self
    {
        $this->setOptions('-passwd ' . $pin);
        return $this;
    }
}