<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions;

trait LengthTrait
{

    /**
     * @param int $lengthBits
     * @return PasswordOptions|KeySetOptions|Certificate|LengthTrait
     */
    final public function length(int $lengthBits): self
    {
        $this->setOptions('-length ' . $lengthBits);

        return $this;
    }
}