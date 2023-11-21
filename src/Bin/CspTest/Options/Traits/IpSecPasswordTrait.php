<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait IpSecPasswordTrait
{
    /**
     * @return $this
     */
    final public function password(string $password): self
    {
        $this->setOptions('-passwd '.$password);

        return $this;
    }
}
