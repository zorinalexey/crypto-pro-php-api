<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

final class CertLicOptions extends Options
{
    use GlobalOptionsTrait;

    public function check(string $certFile): void
    {
        $this->setOptions('-check -certfile "'.$certFile.'"');
    }
}
