<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait ChangeTypeTrait
{
    /**
     * @return ChangeTypeTrait
     */
    final public function changeType(string $type): self
    {
        $this->setOptions('-changetype '.$type);

        return $this;
    }
}
