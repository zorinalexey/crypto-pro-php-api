<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\Base64Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AlgKekTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AskTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\CmsModeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\InputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\LocalCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\LocalStoreTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\OutputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\PasswordTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\UserCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\UserStoreTrait;

class EncryptOptions extends Options
{
    use AlgKekTrait, CmsModeTrait, LocalCertTrait, LocalStoreTrait, UserCertTrait, UserStoreTrait;
    use AlgTrait, AskTrait, Base64Trait, CertTrait, InputFileTrait, OutputFileTrait, PasswordTrait, SilentTrait;
    use GlobalOptionsTrait;

    public function __construct()
    {
        $this->setOptions('-encrypt');
    }
}
