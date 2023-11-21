<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\EncryptionAlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeepBadFilesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StrictTrait;

final class EncryptOptions extends Options
{
    use DerTrait, EncryptionAlgTrait, KeepBadFilesTrait, KpsOptions, StrictTrait;

    /**
     * Указать файл для шифрования
     *
     * @param  string  $inputFile Файл, содержащий исходные данные
     * @param  string  $outputFile Файл, который будет содержать созданное сообщение
     */
    final public function file(string $inputFile, string $outputFile): void
    {
        $this->setOptions('"'.$inputFile.'" "'.$outputFile.'" ');
    }
}
