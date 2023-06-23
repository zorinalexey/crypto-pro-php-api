<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait NullPasswdTrait
{

    /**
     * @return KeySetOptions|NullPasswdTrait
     */
    final public function nullPasswd(): self
    {
        $this->setOptions('-nullpasswd');
        return $this;
    }
}