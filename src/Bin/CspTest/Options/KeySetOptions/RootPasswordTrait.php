<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait RootPasswordTrait
{
    /**
     * @return KeySetOptions|RootPasswordTrait
     */
    final public function rootPassword(string $pin): self
    {
        $this->setOptions('-rootpassword '.$pin);

        return $this;
    }
}
