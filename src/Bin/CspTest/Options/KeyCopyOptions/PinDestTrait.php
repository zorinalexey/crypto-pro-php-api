<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait PinDestTrait
{
    /**
     * @return KeyCopyOptions|PinSrcTrait
     */
    final public function pinDest(string $pin): self
    {
        $this->setOptions('-pindest '.$pin);

        return $this;
    }
}
