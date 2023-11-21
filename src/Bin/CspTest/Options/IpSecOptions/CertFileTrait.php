<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait CertFileTrait
{
    /**
     * @return $this
     */
    final public function certificate(string $filePath): self
    {
        $this->setOptions('-certf "'.$filePath.'"');

        return $this;
    }
}
