<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait ProvSrcTrait
{
    /**
     * @return ProvDestTrait|KeyCopyOptions
     */
    final public function provSrc(string $name): self
    {
        $this->setOptions('-provsrc "'.$name.'"');

        return $this;
    }
}
