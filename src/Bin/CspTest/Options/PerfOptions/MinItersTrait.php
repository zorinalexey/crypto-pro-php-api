<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait MinItersTrait
{
    /**
     * @return PerfOptions|MinItersTrait
     */
    final public function minIters(string $list): self
    {
        $this->setOptions('-miniters '.$list);

        return $this;
    }
}
