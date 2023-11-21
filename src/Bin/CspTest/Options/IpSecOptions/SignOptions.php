<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AutoContTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\IpSecPasswordTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\NameTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\NoPinTrait;

class SignOptions extends Options
{
    use AutoContTrait, CertFileTrait, InputFileTrait, IpSecPasswordTrait, NameTrait, NoPinTrait, SignFileTrait;
    use GlobalOptionsTrait;
}
