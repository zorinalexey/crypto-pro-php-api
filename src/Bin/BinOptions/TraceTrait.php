<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait TraceTrait
{

    /**
     * Уровень логирования для внутренних сообщений.
     * @param string $mode
     * @return KeyCopyOptions|TraceTrait|Options
     */
    final public function trace(string $mode): self
    {
        $this->setOptions('-trace ' . $mode);

        return $this;
    }
}