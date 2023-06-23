<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait UntilTrait
{

    /**
     * @param int $days
     * @return $this
     */
    final public function until(int $days): self
    {
        $this->setOptions('-until ' . $days);
        return $this;
    }
}