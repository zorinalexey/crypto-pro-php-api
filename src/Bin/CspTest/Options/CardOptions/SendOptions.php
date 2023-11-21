<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\InputFileTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\OutputFileTrait;

final class SendOptions extends Options
{
    use GlobalOptionsTrait, InputFileTrait, OutputFileTrait, ReaderTrait, T0Trait, TimeTrait;
}
