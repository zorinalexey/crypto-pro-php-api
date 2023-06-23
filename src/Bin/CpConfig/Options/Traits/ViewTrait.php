<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits;

trait ViewTrait
{

    /**
     * Просмотра списка
     * @return $this
     */
    final public function view(): self
    {
        $this->setOptions('-view');
        return $this;
    }
}