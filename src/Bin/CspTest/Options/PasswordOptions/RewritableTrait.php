<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait RewritableTrait
{
    /**
     * @return RewritableTrait
     */
    final public function rewritable(): self
    {
        $this->setOptions('-rewritable');
        return $this;
    }
}