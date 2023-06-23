<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait EndStoreNameTrait
{
    /**
     * Название конечного хранилища (по умолчанию "My")
     * @param string $store
     * @return $this
     */
    final public function storeName(string $store): self
    {
        $store = ucfirst($store);
        $stores = [
            'My',
            'Root',
            'CA',
            'Cache',
            'AddressBook'
        ];
        if (!in_array($store, $stores)) {
            $store = 'My';
        }
        $this->setOptions($store);
        return $this;
    }
}