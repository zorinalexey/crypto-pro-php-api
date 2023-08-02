<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait PartReaderTrait
{

    /**
     * @param string $name
     * @return PartReaderTrait|PasswordOptions
     */
    final public function partReader(string $name): self
    {
        $this->setOptions('-part_reader ' . $name);

        return $this;
    }
}