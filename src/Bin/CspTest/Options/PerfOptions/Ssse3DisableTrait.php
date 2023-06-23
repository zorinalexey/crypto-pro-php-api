<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait Ssse3DisableTrait
{

    /**
     * @return PerfOptions|Ssse3DisableTrait
     */
    final public function ssse3Disable(): self
    {
        $this->setOptions('-ssse3-disable');
        return $this;
    }
}