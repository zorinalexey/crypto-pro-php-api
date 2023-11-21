<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait FastCodeTrait
{
    final public function fastCode(): self
    {
        $this->setOptions('-fastcode');

        return $this;
    }
}
