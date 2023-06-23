<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\CertSearchOptions;

final class IssuerOptions extends Options
{
    use SilentTrait;

    /**
     * @return CertSearchOptions
     */
    public function issuer(): CertSearchOptions
    {
        $this->setOptions('-issuer');
        $opt = new CertSearchOptions();
        $this->setOptions($opt);
        return $opt;
    }

    public function password(string $password): self
    {
        $this->setOptions('-ipassword ' . $password);
        return $this;
    }

    public function alg(string $oidAlg): self
    {
        $this->setOptions('-ialg ' . $oidAlg);
        return $this;
    }

    final public function store(string|null $typeStore = null, string|null $nameStore = null): self
    {
        $nameStore ??= 'My';
        $typeStore ??= 'u';
        $store = 'uMy';
        $stores = [
            'My',
            'Root',
            'CA',
            'Cache',
            'AddressBook'
        ];
        $typeStore = mb_strtolower($typeStore);
        if ($typeStore !== 'user' && $typeStore !== 'u') {
            $typeStore = 'm';
        }
        if (!in_array($nameStore, $stores)) {
            $store = $typeStore . 'My';
        }
        $this->setOptions('-istore ' . $store);
        return $this;
    }
}