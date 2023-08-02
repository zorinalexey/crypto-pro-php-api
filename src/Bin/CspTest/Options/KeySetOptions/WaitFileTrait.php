<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait WaitFileTrait
{

    /**
     * @param string $file
     * @return WaitFileTrait|KeySetOptions
     */
    final public function waitFile(string $file): self
    {
        $this->setOptions('-waitfile ' . $file);
       
        return $this;
    }
}