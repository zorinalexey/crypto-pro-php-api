<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;

trait ResetTriesTrait
{
    /**
     * @return ResetTriesTrait
     */
    final public function resetTries(): self
    {
        $this->setOptions('-reset_tries');

        return $this;
    }
}
