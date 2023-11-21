<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait DestTrait
{
    /**
     * Файл для декодированного сертификата или CRL.
     *
     * @return DestTrait|Options
     */
    final public function dest(string $path): self
    {
        $this->setOptions("-dest '".$path."'");

        return $this;
    }
}
