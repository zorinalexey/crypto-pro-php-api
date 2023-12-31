<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait CyclesTrait
{
    /**
     * @return CyclesTrait|PerfOptions
     */
    final public function cycles(string $list): self
    {
        $this->setOptions('-cycles '.$list);

        return $this;
    }
}
