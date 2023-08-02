<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;

trait TmplTrait
{

    /**
     * Задать шаблон запрашиваемого сертификата
     * @param string $tmplName Название или OID шаблона
     * @return TmplTrait|CreateCertOptions
     */
    final public function tmpl(string $tmplName): self
    {
        $this->setOptions('-tmpl ' . $tmplName);

        return $this;
    }
}