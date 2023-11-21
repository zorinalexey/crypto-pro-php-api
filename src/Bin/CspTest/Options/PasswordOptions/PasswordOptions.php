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
    use AdminPasswdTrait, ChangeTypeTrait, KeyTypeTrait, PasswdTrait, PukTrait, ResetAdminTrait, ResetTriesTrait;
    use ContainerTrait, CpDllTrait, CpLevelTrait, DefaultOptionalTrait, ProviderTrait, ProvtypeTrait, RewritableTrait;
    use GlobalOptionsTrait;
    use KPartTrait, KTrait, LengthTrait, NkNoNameChangeTrait, NkNoNameTrait, NTrait, PartReaderTrait, SharedReaderTrait;
    use SilentTrait;
}
