<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait TraceTrait
{

    /**
     * Уровень логирования для внутренних сообщений.
     * @param string $mode
     * @return $this
     */
    final public function trace(string $mode): self
    {
        $this->setOptions('-trace ' . $mode);
        return $this;
    }
}