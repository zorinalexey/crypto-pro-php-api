<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait TCertTrait
{
    /**
     * @return $this
     */
    final public function trustedCertificate(string $filePath): self
    {
        $this->setOptions('-tcert "'.$filePath.'"');

        return $this;
    }
}
