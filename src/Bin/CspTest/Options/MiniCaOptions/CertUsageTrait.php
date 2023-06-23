<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait CertUsageTrait
{
    /**
     * @param string $certFilePath
     * @return $this
     */
    final public function certificateUsage(string $certFilePath): self
    {
        $this->setOptions('-certusage "' . $certFilePath . '"');
        return $this;
    }
}