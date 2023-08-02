<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DecryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;

trait PinTrait
{
    /**
     * Пин-код контейнера.
     * @param string $pin Пин-код контейнера.
     * @return SignOptions|PinTrait|Options|AddSignfOptions|AddSignOptions|CreateCertOptions|CreateRequestOptions|DecryptOptions|InstCertOptions|SignfOptions
     */
    final public function pin(string $pin): self
    {
        $this->setOptions('-pin ' . $pin);

        return $this;
    }
}