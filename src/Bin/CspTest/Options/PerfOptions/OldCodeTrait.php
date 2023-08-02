<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait OldCodeTrait
{

    /**
     * @return OldCodeTrait|PerfOptions
     */
    final public function oldCode(): self
    {
        $this->setOptions('-oldcode');
       
        return $this;
    }

}