<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait PinSrcTrait
{

    /**
     * @param string $pin
     * @return KeyCopyOptions|PinSrcTrait
     */
    final public function pinSrc(string $pin): self
    {
        $this->setOptions('-pinsrc ' . $pin);
        return $this;
    }
}