<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait TypeSrcTrait
{
    /**
     * @return ProvDestTrait|KeyCopyOptions
     */
    final public function typeSrc(string $name): self
    {
        $this->setOptions('-typesrc "'.$name.'"');

        return $this;
    }
}
