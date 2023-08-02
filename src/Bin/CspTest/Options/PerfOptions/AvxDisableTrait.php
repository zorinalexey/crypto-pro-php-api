<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait AvxDisableTrait
{

    final public function avxDisable(): self
    {
        $this->setOptions('-avx-disable');

        return $this;
    }
}