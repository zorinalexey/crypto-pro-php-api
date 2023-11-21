<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;

trait PatternTrait
{
    /**
     * @return $this
     */
    final public function pattern(string $pattern): self
    {
        $this->setOptions('-pattern '.$pattern);

        return $this;
    }
}
