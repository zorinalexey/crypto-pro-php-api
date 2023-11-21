<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait SrcTrait
{
    /**
     * Файл с сертификатом или CRL для декодирования.
     *
     * @param  string  $path Путь к файлу с сертификатом или CRL для декодирования.
     * @return SrcTrait|Options
     */
    final public function src(string $path): self
    {
        $this->setOptions("-src '".$path."'");

        return $this;
    }
}
