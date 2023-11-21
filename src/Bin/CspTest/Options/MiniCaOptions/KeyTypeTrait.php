<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait KeyTypeTrait
{
    /**
     * @return $this
     */
    final public function keyType(string $keyType = 'both'): self
    {
        $this->setOptions('-keytype '.$keyType);

        return $this;
    }
}
