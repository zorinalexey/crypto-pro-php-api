<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions\SfEncOptions;

trait Base64Trait
{
    /**
     * Использовать для представления сертификата или CRL кодировку base64.
     *
     * @return SignOptions|Base64Trait|Options|KeySetOptions|EncryptOptions|SfEncOptions|\CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions
     */
    final public function base64(): self
    {
        $this->setOptions('-base64');

        return $this;
    }
}
