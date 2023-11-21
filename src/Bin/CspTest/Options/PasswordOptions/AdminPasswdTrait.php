<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait AdminPasswdTrait
{
    /**
     * @return $this
     */
    final public function adminPassword(string $pin): self
    {
        $this->setOptions('-adminpasswd '.$pin);

        return $this;
    }
}
