<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions;

trait SetDefaultTrait
{
    final public function setDefault(string $providerName): DefProviderOptions
    {
        $this->setOptions('-set_def "'.$providerName.'"');
        $opt = new DefProviderOptions();
        $this->setOptions($opt);

        return $opt;
    }
}
