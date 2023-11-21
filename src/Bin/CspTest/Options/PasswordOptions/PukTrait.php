<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait PukTrait
{
    /**
     * @return PasswdTrait|PasswordOptions
     */
    final public function puk(string $pin): self
    {
        $this->setOptions('-puk '.$pin);

        return $this;
    }
}
