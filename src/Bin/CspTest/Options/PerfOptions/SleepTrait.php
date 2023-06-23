<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait SleepTrait
{

    /**
     * @return PerfOptions|SleepTrait
     */
    final public function sleep(): self
    {
        $this->setOptions('-sleep');
        return $this;
    }
}