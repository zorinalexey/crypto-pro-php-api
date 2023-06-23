<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DirTrait
{

    /**
     * Папка для файлов со значениями хэш-функции (по умолчанию текущая)
     * @param string $path
     * @return $this
     */
    final public function dir(string $path): self
    {
        $this->setOptions('-dir "' . $path . '"');
        return $this;
    }
}