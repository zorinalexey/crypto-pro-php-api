<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesBesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FextTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeepBadFilesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoCadesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SignTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\VerAllTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\XLongType1Trait;

class VerifyOptions extends Options
{
    use CadesBesTrait, CadestTrait, KeepBadFilesTrait, KpsOptions, NoCadesTrait, SignTypeTrait, XLongType1Trait;
    use FextTrait, VerAllTrait;

    /**
     * Указать файл для шифрования
     *
     * @param  string  $inputFile Файл, содержащий исходные данные
     * @param  string  $outputFile Файл, в который будут записаны данные из сообщения
     */
    final public function file(string $inputFile, string $outputFile): void
    {
        $this->setOptions('"'.$inputFile.'" "'.$outputFile.'" ');
    }
}
