<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions;

trait ClearDefaultTrait
{
    final public function clearDefault(string $providerName): DefProviderOptions
    {
        $this->setOptions('-clear_def "'.$providerName.'"');
        $opt = new DefProviderOptions();
        $this->setOptions($opt);

        return $opt;
    }
}
