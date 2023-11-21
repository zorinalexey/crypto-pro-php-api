<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions\SfEncOptions;

trait OutputFileTrait
{
    /**
     * @return SignOptions|HashOptions|KeySetOptions|EncryptOptions|SfEncOptions|\CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions|OutputFileTrait
     */
    final public function outputFile(string $filePath): self
    {
        $this->setOptions('-out "'.$filePath.'"');

        return $this;
    }
}
