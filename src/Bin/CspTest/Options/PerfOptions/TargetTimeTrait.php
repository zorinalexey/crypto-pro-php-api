<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait TargetTimeTrait
{

    /**
     * @param string $lst
     * @return TargetTimeTrait|PerfOptions
     */
    final public function targetTime(string $lst): self
    {
        $this->setOptions('-targettime ' . $lst);
        return $this;
    }
}