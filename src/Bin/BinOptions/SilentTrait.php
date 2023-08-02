<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\AbsorbParamsOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\CertSearchOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\RegOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\Certificate;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\IssuerOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\MiniCaCrlOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\PropertyCommandOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions\SfEncOptions;

trait SilentTrait
{

    /**
     * Не интерактивный режим.
     * Возвращает ошибку в случае, если под заданные параметры подходит более одного сертификата (CRL),
     * в таком случае требуется указать более строгие критерии поиска.
     * @return CertSearchOptions|SilentTrait|Options|CreateCertOptions|CreateRequestOptions|AbsorbParamsOptions|EnumOptions|RegOptions|KeyCopyOptions|KeySetOptions|EncryptOptions|SignOptions|Certificate|IssuerOptions|MiniCaCrlOptions|OidOptions|PasswordOptions|PerfOptions|PropertyCommandOptions|SfEncOptions|\CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions\SignOptions
     */
    final public function silent(): self
    {
        $this->setOptions('-silent');
       
        return $this;
    }
}