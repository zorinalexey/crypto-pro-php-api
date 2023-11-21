<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait TypeDestTrait
{
    /**
     * @return ProvDestTrait|KeyCopyOptions
     */
    final public function typeDest(string $name): self
    {
        $this->setOptions('-typedest "'.$name.'"');

        return $this;
    }
}
