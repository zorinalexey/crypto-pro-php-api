<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertKeyOptions;

trait StoreTrait
{
    /**
     * Имя хранилища.
     *
     * @param  string|null  $type Тип хранилища:
     *  user - хранилище пользователя (по умолчанию)
     *  во всех других случаях - хранилище машины
     * @return CertKeyOptions|StoreTrait|Options
     */
    final public function store(string $type = null, string $store = null, bool $mStore = null): self
    {
        $mStore ??= false;
        $type ??= 'u';
        $store = ucfirst($store);
        $stores = [
            'My',
            'Root',
            'CA',
            'Cache',
            'AddressBook',
        ];
        if ($type !== 'user' && $type !== 'u') {
            $type = 'm';
        }
        if (! in_array($store, $stores)) {
            $store = $type.'My';
        }
        if (! $mStore) {
            $this->setOptions('-store '.$store);
        } else {
            $this->setOptions('-Store '.$store);
        }

        return $this;
    }
}
