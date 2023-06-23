<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait KPartTrait
{

    /**
     * @param int $i
     * @param string $j
     * @return KPartTrait
     */
    final public function kPart(int $i, string $j): self
    {
        $this->setOptions('-kpart ' . $i . '.' . $j);
        return $this;
    }
}