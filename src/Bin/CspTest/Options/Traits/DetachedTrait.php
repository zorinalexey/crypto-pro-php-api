<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait DetachedTrait
{

    /**
     * @return $this
     */
    final public function detached(): static
    {
        $this->setOptions('-detached');

        return $this;
    }
}