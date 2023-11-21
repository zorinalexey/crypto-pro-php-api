<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions as SfSignOpt;

trait SignatureTrait
{
    /**
     * @return SignOptions|KeySetOptions|SfSignOpt|SignatureTrait
     */
    final public function signature(string $file): self
    {
        $this->setOptions('-signature "'.$file.'"');

        return $this;
    }
}
