<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait TftmTrait
{


    /**
     * Формат логирования для внутренних сообщений.
     * @param string $flag
     * @return TftmTrait|Options|KeyCopyOptions
     */
    final public function tfmt(string $flag): self
    {
        $this->setOptions('-tfmt ' . $flag);
        return $this;
    }

}