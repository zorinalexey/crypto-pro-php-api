<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions\SfEncOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions as SfSignOptions;

trait PasswordTrait
{

    /**
     * @param string $pin
     * @return PasswordTrait|KeySetOptions|EncryptOptions|SignOptions|OidOptions|SfEncOptions|SfSignOptions
     */
    final public function password(string $pin): self
    {
        $this->setOptions('-password ' . $pin);
       
        return $this;
    }
}