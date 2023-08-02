<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\PropertyCommandOptions;

trait RepeatTrait
{

    /**
     * @param int $count
     * @return SignOptions|EnumOptions|PerfOptions|PropertyCommandOptions|RepeatTrait
     */
    final public function repeat(int $count): self
    {
        $this->setOptions('-repeat ' . $count);

        return $this;
    }
}