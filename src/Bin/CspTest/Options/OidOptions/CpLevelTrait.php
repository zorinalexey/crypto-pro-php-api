<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait CpLevelTrait
{
    /**
     * @param int $level
     * @return PerfOptions|EnumOptions|KeySetOptions|OidOptions|CpLevelTrait|PasswordOptions
     */
    final public function cpLevel(int $level): self
    {
        $this->setOptions('--cplevel ' . $level);

        return $this;
    }
}