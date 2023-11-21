<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait VerifyContextTrait
{
    /**
     * @return KeySetOptions|VerifyContextTrait
     */
    final public function verifyContext(): self
    {
        $this->setOptions('-verifycontext');

        return $this;
    }
}
