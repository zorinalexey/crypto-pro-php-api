<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait FromTrait
{

    /**
     * @param int $days
     * @return $this
     */
    final public function from(int $days): self
    {
        $this->setOptions('-from ' . $days);
        return $this;
    }
}