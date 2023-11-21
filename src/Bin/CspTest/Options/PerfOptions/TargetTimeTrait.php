<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait TargetTimeTrait
{
    /**
     * @return TargetTimeTrait|PerfOptions
     */
    final public function targetTime(string $lst): self
    {
        $this->setOptions('-targettime '.$lst);

        return $this;
    }
}
