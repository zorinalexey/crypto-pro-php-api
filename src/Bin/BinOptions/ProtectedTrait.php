<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;

trait ProtectedTrait
{
    /**
     * Установить уровень защиты ключевого контейнера:
     * none (по умолчанию)
     * medium
     * high
     *
     * @return ProtectedTrait|Options|KeySetOptions
     */
    final public function protected(string $mode): self
    {
        $types = [
            'none',
            'medium',
            'high',
        ];
        if (! in_array(mb_strtolower($mode), $types)) {
            $mode = 'none';
        }
        $this->setOptions('-protected '.$mode);

        return $this;
    }
}
