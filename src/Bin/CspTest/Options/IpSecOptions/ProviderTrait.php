<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\AbsorbParamsOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\Certificate;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait ProviderTrait
{
    /**
     * @return EnumOptions|AbsorbParamsOptions|HashOptions|ProviderTrait|KeySetOptions|Certificate|OidOptions|PasswordOptions|PerfOptions
     */
    final public function provider(string $providerName): self
    {
        $this->setOptions('-provider "'.$providerName.'"');

        return $this;
    }
}
