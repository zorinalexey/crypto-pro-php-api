<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;

trait PassesTrait
{
    /**
     * @return PassesTrait|KeySetOptions
     */
    final public function passes(int $passes = null): self
    {
        $threads ??= 1;
        $this->setOptions('-passes '.$passes);

        return $this;
    }
}
