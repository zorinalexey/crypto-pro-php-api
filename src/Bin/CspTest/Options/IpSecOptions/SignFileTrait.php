<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait SignFileTrait
{
    /**
     * @param string $filePath
     * @return $this
     */
    final public function sigFile(string $filePath): self
    {
        $this->setOptions('-fsig "' . $filePath . '"');

        return $this;
    }
}