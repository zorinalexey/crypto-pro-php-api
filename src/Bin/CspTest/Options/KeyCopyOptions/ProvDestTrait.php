<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait ProvDestTrait
{
    /**
     * @return ProvDestTrait|KeyCopyOptions
     */
    final public function provDest(string $name): self
    {
        $this->setOptions('-provdest "'.$name.'"');

        return $this;
    }
}
