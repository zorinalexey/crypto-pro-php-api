<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\DefProv\SetDefOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait ProvnameTrait
{
    /**
     * Имя провайдера.
     *
     * @param  string  $name Имя провайдера.
     * @return CreateCertOptions|ProvnameTrait|Options|SetDefOptions|CreateRequestOptions|CspCertOptions|HashOptions|InstCertOptions|PendCertOptions
     */
    final public function provname(string $name): self
    {
        $this->setOptions('-provname "'.$name.'"');

        return $this;
    }
}
