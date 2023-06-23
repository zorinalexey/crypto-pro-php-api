<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait KeyTrait
{

    /**
     * @param string $containerName
     * @return $this
     */
    final public function key(string $containerName): self
    {
        $this->setOptions("-key '{$containerName}'");
        return $this;
    }
}