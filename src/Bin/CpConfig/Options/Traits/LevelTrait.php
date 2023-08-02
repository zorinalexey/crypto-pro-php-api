<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits;

trait LevelTrait
{
    final public function level(int $level): self
    {
        $this->setOptions('-level ' . $level);

        return $this;
    }
}