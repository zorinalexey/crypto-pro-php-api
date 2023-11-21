<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;

trait FilterByTypeTrait
{
    /**
     * @return KeySetOptions|AbsorbParamsOptions|FilterByTypeTrait
     */
    final public function filterByType(): self
    {
        $this->setOptions('-filterbytype');

        return $this;
    }
}
