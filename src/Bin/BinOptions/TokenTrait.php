<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait TokenTrait
{
    /**
     * Задать маркер временного доступа для проверки статуса
     * @param string $token
     * @return $this
     */
    final public function token(string $token): self
    {
        $this->setOptions('-token ' . $token);
        return $this;
    }
}