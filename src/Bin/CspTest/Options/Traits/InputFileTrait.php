<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\PropertyCommandOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions\SfEncOptions;

trait InputFileTrait
{

    /**
     * @param string $filePath
     * @return InputFileTrait|HashOptions|KeySetOptions|EncryptOptions|SignOptions|PropertyCommandOptions|SfEncOptions|\CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions
     */
    final public function inputFile(string $filePath): self
    {
        $this->setOptions('-in "' . $filePath . '"');
        return $this;
    }
}