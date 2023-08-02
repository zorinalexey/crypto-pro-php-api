<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;

trait EndStoreNameTrait
{
    /**
     * Название конечного хранилища (по умолчанию "My")
     * @param string $store
     * @return CopyCertOptions|EndStoreNameTrait|CspCertOptions
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