<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait SrcTrait
{

    /**
     * Файл с сертификатом или CRL для декодирования.
     * @param string $path Путь к файлу с сертификатом или CRL для декодирования.
     * @return $this
     */
    final public function src(string $path): self
    {
        $this->setOptions("-src '" . $path . "'");
        return $this;
    }
}