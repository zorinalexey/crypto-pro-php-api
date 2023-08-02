<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait OtherCertTrait
{
    /**
     * @param string $filePath
     * @return $this
     */
    final public function otherCertificate(string $filePath): self
    {
        $this->setOptions('-othercert "' . $filePath . '"');

        return $this;
    }
}