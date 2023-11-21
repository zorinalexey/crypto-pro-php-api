<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait ContDestTrait
{
    /**
     * @return ContSrcTrait
     */
    final public function contDest(string $container): self
    {
        $this->setOptions('-contdest '.$container);

        return $this;
    }
}
