<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait SavePinTrait
{
    /**
     * @return $this
     */
    final public function savePin(): self
    {
        $this->setOptions('-savepin');

        return $this;
    }
}
