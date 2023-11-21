<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

trait MyCertTrait
{
    /**
     * @return $this
     */
    final public function myCertificate(string $filePath): self
    {
        $this->setOptions('-mycert "'.$filePath.'"');

        return $this;
    }
}
