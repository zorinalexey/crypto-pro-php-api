<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait WaitCarrierTrait
{

    /**
     * @param int $seconds
     * @return WaitCarrierTrait|KeySetOptions
     */
    final public function waitCarrier(int $seconds): self
    {
        $this->setOptions('-waitcarrier ' . $seconds);
       
        return $this;
    }
}