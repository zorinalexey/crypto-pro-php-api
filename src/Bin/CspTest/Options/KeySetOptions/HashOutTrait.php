<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait HashOutTrait
{
    /**
     * @return KeySetOptions|FilterTrait
     */
    final public function hashOut(string $file): self
    {
        $this->setOptions('-hashout "'.$file.'"');

        return $this;
    }
}
