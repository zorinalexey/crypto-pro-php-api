<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AttrTrait;

class AddAttrOptions extends Options
{
    use AttrTrait, KpsOptions;

    /**
     * Указать файл для шифрования
     *
     * @param  string  $inputFile Файл, содержащий сообщение
     */
    final public function file(string $inputFile): void
    {
        $this->setOptions('"'.$inputFile.'"');
    }
}
