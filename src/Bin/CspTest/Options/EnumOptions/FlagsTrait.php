<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions;

trait FlagsTrait
{
    /**
     * @return EnumOptions|FlagsTrait
     */
    final public function flags(int $flags): self
    {
        $this->setOptions('-flags '.$flags);

        return $this;
    }
}
