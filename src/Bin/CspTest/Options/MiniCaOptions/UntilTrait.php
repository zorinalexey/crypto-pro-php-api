<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait UntilTrait
{
    /**
     * @return $this
     */
    final public function until(int $days): self
    {
        $this->setOptions('-until '.$days);

        return $this;
    }
}
