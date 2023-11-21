<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\ProviderTrait;

class Certificate extends Options
{
    use AltNameTrait, FromTrait, IssuerTrait, UntilTrait;
    use CdpTrait, CertUsageTrait, DnTrait, KeyTypeTrait, LengthTrait, ProviderTrait, ProvtypeTrait, SilentTrait;
    use GlobalOptionsTrait;
}
