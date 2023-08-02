<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait KeyTypeTrait
{

    /**
     * @param string $keyType
     * @return $this
     */
    final public function keyType(string $keyType = 'both'): self
    {
        $this->setOptions('-keytype ' . $keyType);

        return $this;
    }
}