<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait TmplTrait
{

    /**
     * Задать шаблон запрашиваемого сертификата
     * @param string $tmplName Название или OID шаблона
     * @return $this
     */
    final public function tmpl(string $tmplName): self
    {
        $this->setOptions('-tmpl ' . $tmplName);
        return $this;
    }
}