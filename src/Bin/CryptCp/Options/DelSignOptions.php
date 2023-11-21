<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FextTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SignTypeTrait;

class DelSignOptions extends Options
{
    use FextTrait, KpsOptions, SignTypeTrait;

    /**
     * Указать файл или сообщение для удаления из него подписи
     *
     * @param  string  $inputFile Файл, содержащий сообщение
     * @param  string  $outputFile Файл, содержащий исходные данные
     */
    final public function file(string $inputFile, string $outputFile): void
    {
        $this->setOptions('"'.$inputFile.'" "'.$outputFile.'" ');
    }
}
