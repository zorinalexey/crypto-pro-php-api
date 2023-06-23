<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait DefaultOptionalTrait
{
    /**
     * @return DefaultOptionalTrait|PasswordOptions
     */
    final public function defaultOptional(): self
    {
        $this->setOptions('-default_optional');
        return $this;
    }
}