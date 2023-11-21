<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeepBadFilesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;

final class DecryptOptions extends Options
{
    use KeepBadFilesTrait, KpsOptions, PinTrait;

    /**
     * Указать файл для расшифровки
     *
     * @param  string  $inputFile Файл, содержащий сообщение
     * @param  string  $outputFile Файл, который будет содержать расшифрованные данные
     */
    final public function file(string $inputFile, string $outputFile): void
    {
        $this->setOptions('"'.$inputFile.'" "'.$outputFile.'" ');
    }
}
