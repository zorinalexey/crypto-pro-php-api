<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait ResetAdminTrait
{
    /**
     * @return ResetTriesTrait
     */
    final public function resetAdmin(): self
    {
        $this->setOptions('-reset_admin');
        return $this;
    }
}