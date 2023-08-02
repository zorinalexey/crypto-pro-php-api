<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;

trait StoreTrait
{

    /**
     * @param string $type
     * @return $this
     */
    final public function store(string $type): self
    {
        $store = mb_strtoupper($type);
        if ($store !== 'FILE') {
            $store = 'MEM';
        }
        $this->setOptions('-store ' . $store);

        return $this;
    }

}