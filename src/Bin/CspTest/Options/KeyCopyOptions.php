<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TftmTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\TraceTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\ArchivableTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\ContDestTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\ContSrcTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\MachineDestTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\MachineSrcTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\PinDestTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\PinSrcTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\ProvDestTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\ProvSrcTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\TypeDestTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions\TypeSrcTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\RewritableTrait;

final class KeyCopyOptions extends Options
{
    use ArchivableTrait, ContDestTrait, ContSrcTrait, MachineDestTrait, PinDestTrait, PinSrcTrait, TraceTrait;
    use GlobalOptionsTrait;
    use MachineSrcTrait, ProvDestTrait, ProvSrcTrait, RewritableTrait, SilentTrait, TypeDestTrait, TypeSrcTrait;
    use TftmTrait;
}
