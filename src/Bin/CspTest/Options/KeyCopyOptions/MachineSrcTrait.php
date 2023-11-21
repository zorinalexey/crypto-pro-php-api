<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait MachineSrcTrait
{
    /**
     * @return MachineSrcTrait|KeyCopyOptions
     */
    final public function machineSrc(): self
    {
        $this->setOptions('-machinesrc');

        return $this;
    }
}
