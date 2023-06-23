<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait CNumberTrait
{

    /**
     * @param int $certNumber
     * @return $this
     */
    final public function cNumber(int $certNumber): self
    {
        $this->setOptions('-cnumber ' . $certNumber);
        return $this;
    }
}