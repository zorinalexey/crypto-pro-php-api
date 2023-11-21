<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait StoreTrait
{
    /**
     * @return $this
     */
    final public function store(string $typeStore = null, string $nameStore = null): self
    {
        $nameStore ??= 'My';
        $typeStore ??= 'u';
        $store = 'uMy';
        $stores = [
            'My',
            'Root',
            'CA',
            'Cache',
            'AddressBook',
        ];
        $typeStore = mb_strtolower($typeStore);
        if ($typeStore !== 'user' && $typeStore !== 'u') {
            $typeStore = 'm';
        }
        if (! in_array($nameStore, $stores)) {
            $store = $typeStore.'My';
        }
        $this->setOptions('-rstore '.$store);

        return $this;
    }
}
