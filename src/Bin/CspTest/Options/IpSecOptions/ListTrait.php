<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait ListTrait
{
    /**
     * @param string $filePath
     * @return $this
     */
    final public function listCRL(string $filePath): self
    {
        $this->setOptions('-list "' . $filePath . '"');
        return $this;
    }
}