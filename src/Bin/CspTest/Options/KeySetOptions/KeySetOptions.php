<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\Base64Trait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContainerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PassesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProtectedTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThreadsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\FilterByTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\PatternTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\ProviderTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\KeyTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\LengthTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpDllTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpLevelTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\DefaultOptionalTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\RewritableTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\InputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\OutputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\PasswordTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\SignatureTrait;

final class KeySetOptions extends Options
{
    use Base64Trait, HardRngTrait, ImportTrait, LengthTrait, PasswordTrait, PubKeyTrait, RootPasswordTrait;
    use CertificateTrait, HashOutTrait, InputFileTrait, OutputFileTrait, RewritableTrait, SignatureTrait;
    use ContainerTrait, FilterByTypeTrait, FQcnTrait, MachineKeySetTrait, UniqueTrait, VerifyContextTrait;
    use CounterTrait, NullPasswdTrait, WaitCarrierTrait, WaitFileTrait;
    use CpDllTrait, CpLevelTrait, PassesTrait, ProviderTrait, ProvtypeTrait, SilentTrait, ThreadsTrait;
    use DefaultOptionalTrait, ExportableTrait, FilterTrait, KeyTypeTrait, PatternTrait, ProtectedTrait;
    use GlobalOptionsTrait;
}
