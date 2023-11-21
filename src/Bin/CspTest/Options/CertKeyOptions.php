<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StoreTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\VerboseTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;

final class CertKeyOptions extends Options
{
    use GlobalOptionsTrait;
    use ProvtypeTrait, StoreTrait, VerboseTrait;

    /**
     * @return $this
     */
    public function userStore(string $name): self
    {
        $this->store('user', $name);

        return $this;
    }

    /**
     * @return $this
     */
    public function localStore(string $name): self
    {
        $this->store('local', $name, true);

        return $this;
    }

    /**
     * @return $this
     */
    public function oldProv(string $providerName): self
    {
        $this->setOptions('-oldprov "'.$providerName.'"');

        return $this;
    }

    /**
     * @return $this
     */
    public function oldProvNull(): self
    {
        $this->setOptions('-oldprovnull');

        return $this;
    }

    /**
     * @return $this
     */
    public function newProv(string $providerName): self
    {
        $this->setOptions('-newprov "'.$providerName.'"');

        return $this;
    }

    /**
     * @return $this
     */
    public function flags(int $flag): self
    {
        $this->setOptions('-flags '.$flag);

        return $this;
    }

    /**
     * @return $this
     */
    public function show(): self
    {
        $this->setOptions('-show');

        return $this;
    }

    /**
     * @return $this
     */
    public function change(): self
    {
        $this->setOptions('-change');

        return $this;
    }

    /**
     * @return $this
     */
    public function newProvNull(): self
    {
        $this->setOptions('-newprovnull');

        return $this;
    }
}
