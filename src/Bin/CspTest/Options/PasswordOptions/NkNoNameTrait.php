<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait NkNoNameTrait
{

    /**
     * @return NkNoNameTrait|PasswordOptions
     */
    final public function nkNoName(): self
    {
        $this->setOptions('-nk_noname');

        return $this;
    }
}