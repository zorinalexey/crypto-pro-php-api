<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait ProtectedTrait
{

    /**
     * Установить уровень защиты ключевого контейнера:
     * none (по умолчанию)
     * medium
     * high
     * @param string $mode
     * @return $this
     */
    final public function protected(string $mode): self
    {
        $types = [
            'none',
            'medium',
            'high',
        ];
        if (!in_array(mb_strtolower($mode), $types)) {
            $mode = 'none';
        }
        $this->setOptions('-protected ' . $mode);
        return $this;
    }
}