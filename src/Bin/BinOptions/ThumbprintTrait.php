<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ThumbprintTrait
{

    /**
     * Цифровой отпечаток сертификата для фильтрации.
     * @param string $certSha1
     * @return $this
     */
    final public function thumbprint(string $certSha1): self
    {
        $this->setOptions('-thumbprint ' . $certSha1);
        return $this;
    }

}