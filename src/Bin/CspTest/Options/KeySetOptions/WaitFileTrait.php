<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait WaitFileTrait
{
    /**
     * @return WaitFileTrait|KeySetOptions
     */
    final public function waitFile(string $file): self
    {
        $this->setOptions('-waitfile '.$file);

        return $this;
    }
}
