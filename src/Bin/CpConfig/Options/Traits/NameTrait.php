<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits;

trait NameTrait
{

    final public function name(string $name): self
    {
        $this->setOptions('-name "' . $name . '"');
        return $this;
    }
}