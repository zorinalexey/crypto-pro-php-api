<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\ProviderTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\VerifyContextTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpDllTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpLevelTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\AvxDisableTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\CyclesTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\FastCodeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\MaxItersTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\MinItersTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\MmxSseDisableTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\OldCodeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\SleepTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\Ssse3DisableTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions\TargetTimeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\RepeatTrait;

final class PerfOptions extends Options
{
    use AvxDisableTrait, FastCodeTrait, SleepTrait;
    use CpDllTrait, CpLevelTrait, ProviderTrait, ProvtypeTrait, RepeatTrait, SilentTrait, VerifyContextTrait;
    use CyclesTrait, MaxItersTrait, MinItersTrait, MmxSseDisableTrait, OldCodeTrait, Ssse3DisableTrait, TargetTimeTrait;
}
