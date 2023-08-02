<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait ExportableTrait
{

    /**
     * @return ExportableTrait|KeySetOptions
     */
    final public function exportable(): self
    {
        $this->setOptions('-exportable');

        return $this;
    }
}