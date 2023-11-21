<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait AltNameTrait
{
    /**
     * @return $this
     */
    final public function altName(string $name): self
    {
        $this->setOptions('-altname "'.$name.'"');

        return $this;
    }
}
