<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait SignFileTrait
{
    /**
     * @return $this
     */
    final public function sigFile(string $filePath): self
    {
        $this->setOptions('-fsig "'.$filePath.'"');

        return $this;
    }
}
