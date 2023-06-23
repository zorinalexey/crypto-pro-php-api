<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions;

trait TimeTrait
{

    final public function time(): self
    {
        $this->setOptions('-time');
        return $this;
    }
}