<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait SharedReaderTrait
{

    /**
     * @param string $name
     * @return SharedReaderTrait|PasswordOptions
     */
    final public function sharedReader(string $name): self
    {
        $this->setOptions('-shared_reader ' . $name);
        return $this;
    }
}