<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait PfxTrait
{
    /**
     * Работать с PFX-файлом.
     * @return PfxTrait|Options
     */
    final public function pfx(): self
    {
        $this->setOptions('-pfx');

        return $this;
    }
}