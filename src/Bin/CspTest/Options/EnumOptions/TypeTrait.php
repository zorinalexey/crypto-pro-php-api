<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions;

trait TypeTrait
{
    /**
     * @return TypeTrait|EnumOptions
     */
    final public function type(string $type): self
    {
        $this->setOptions('-type '.$type);

        return $this;
    }
}
