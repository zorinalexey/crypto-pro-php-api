<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait CpDllTrait
{
    /**
     * @param string $dll
     * @return PerfOptions|EnumOptions|KeySetOptions|OidOptions|CpDllTrait|PasswordOptions
     */
    final public function cpDll(string $dll): self
    {
        $this->setOptions('--cpdll "' . $dll . '"');

        return $this;
    }
}