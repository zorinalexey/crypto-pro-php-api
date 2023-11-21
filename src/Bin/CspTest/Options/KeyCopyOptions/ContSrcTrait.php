<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait ContSrcTrait
{
    /**
     * @return ContSrcTrait
     */
    final public function contSrc(string $container): self
    {
        $this->setOptions('-contsrc '.$container);

        return $this;
    }
}
