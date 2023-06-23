<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContainerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\ProviderTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\KeyTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\LengthTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpDllTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpLevelTrait;

final class PasswordOptions extends Options
{
    use ProviderTrait, ProvtypeTrait, CpLevelTrait, CpDllTrait, ContainerTrait, DefaultOptionalTrait, RewritableTrait;
    use KeyTypeTrait, PasswdTrait, AdminPasswdTrait, PukTrait, ChangeTypeTrait, ResetTriesTrait, ResetAdminTrait;
    use NTrait, KTrait, NkNoNameTrait, NkNoNameChangeTrait, KPartTrait, SharedReaderTrait, PartReaderTrait, LengthTrait;
    use SilentTrait;
    use GlobalOptionsTrait;
}