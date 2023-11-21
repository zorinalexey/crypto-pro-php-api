<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait ImportTrait
{
    /**
     * @return ImportTrait|KeySetOptions
     */
    final public function import(string $file): self
    {
        $this->setOptions('-import "'.$file.'"');

        return $this;
    }
}
