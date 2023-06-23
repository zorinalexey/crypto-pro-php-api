<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\Base64Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AskTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\InputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\LocalCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\LocalStoreTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\OutputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\PasswordTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\UserCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\UserStoreTrait;

final class SfEncOptions extends Options
{
    use InputFileTrait, OutputFileTrait, UserStoreTrait, LocalStoreTrait, PasswordTrait, Base64Trait;
    use UserCertTrait, LocalCertTrait, AskTrait, AlgTrait, SilentTrait;
    use GlobalOptionsTrait;
}