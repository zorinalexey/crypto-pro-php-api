<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait CdpTrait
{

    /**
     * @param string $url
     * @return $this
     */
    final public function cdp(string $url): self
    {
        $this->setOptions('-cdp "' . $url . '"');
        return $this;
    }
}