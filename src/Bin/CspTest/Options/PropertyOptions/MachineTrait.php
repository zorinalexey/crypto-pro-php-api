<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\AbsorbParamsOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;

trait MachineTrait
{

    /**
     * @return MachineTrait|AbsorbParamsOptions|EnumOptions|PropertyCommandOptions
     */
    final public function machine(): self
    {
        $this->setOptions('-machine');

        return $this;
    }
}