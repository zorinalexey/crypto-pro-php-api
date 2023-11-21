<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait NkNoNameChangeTrait
{
    /**
     * @return NkNoNameChangeTrait
     */
    final public function nkNoNameChange(): self
    {
        $this->setOptions('-nk_nonamechange');

        return $this;
    }
}
