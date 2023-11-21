<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ExtTrait
{
    /**
     * Добавить расширение к запросу
     *
     * @param  string  $file Имя файла, в котором следует сохранить запрос
     * @param  string|null  $ext Имя файла с закодированным расширением (BASE64 или DER)
     */
    final public function ext(string $file, string $ext = null): void
    {
        if ($ext) {
            $this->setOptions($ext.' '.$file);
        } else {
            $this->setOptions($file);
        }
    }
}
