<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits;

trait AddTrait
{
    /**
     * Добавления консольного БиоДСЧ
     * Просмотра списка
     * @return $this
     */
    final public function add(): self
    {
        $this->setOptions('-add');

        return $this;
    }
}