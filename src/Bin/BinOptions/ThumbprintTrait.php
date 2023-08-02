<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddAttrOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DecryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\CertSearchOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\StoreOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions\RcStoreOption;

trait ThumbprintTrait
{

    /**
     * Цифровой отпечаток сертификата для фильтрации.
     * @param string $certSha1
     * @return AddAttrOptions|ThumbprintTrait|Options|\CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options|AddSignfOptions|AddSignOptions|CopyCertOptions|CreateCertOptions|DecryptOptions|DelCertOptions|DelSignOptions|EncryptOptions|ListTmplOptions|PendCertOptions|SignfOptions|SignOptions|VerifyOptions|VSignOptions|CertSearchOptions|StoreOptions|RcStoreOption
     */
    final public function thumbprint(string $certSha1): self
    {
        $this->setOptions('-thumbprint ' . $certSha1);

        return $this;
    }

}