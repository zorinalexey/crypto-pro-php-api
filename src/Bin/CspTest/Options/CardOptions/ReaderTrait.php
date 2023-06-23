<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions;

trait ReaderTrait
{

    final public function reader(string $reader): self
    {
        $this->setOptions('-reader ' . $reader);
        return $this;
    }
}