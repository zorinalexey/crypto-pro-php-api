<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait SignTypeTrait
{

    /**
     * Тип подписи
     * @param string $type
     * attached - создать присоединённые подписи
     * detached - создать отсоединённые подписи в отдельных файлах
     * @return $this
     */
    final public function signType(string $type): self
    {
        $type = mb_strtolower($type);
        if ($type !== 'detached') {
            $type = 'attached';
        }
        $this->setOptions('-' . $type);
        return $this;
    }
}