<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait MaxItersTrait
{
    /**
     * @return MaxItersTrait|PerfOptions
     */
    final public function maxIters(string $list): self
    {
        $this->setOptions('-maxiters '.$list);

        return $this;
    }
}
