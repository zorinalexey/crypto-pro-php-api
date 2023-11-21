<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait KeyIdTrait
{
    /**
     * Идентификатор ключа для фильтрации.
     *
     * @return KeyIdTrait|Options
     */
    final public function keyid(string $keyid): self
    {
        $this->setOptions('-keyid '.$keyid);

        return $this;
    }
}
