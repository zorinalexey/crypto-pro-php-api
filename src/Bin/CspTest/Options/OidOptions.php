<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ContainerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SilentTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\ProviderTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpDllTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions\CpLevelTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\AlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits\PasswordTrait;

final class OidOptions extends Options
{
    use ProvtypeTrait, ProviderTrait, AlgTrait, ContainerTrait, PasswordTrait, SilentTrait;
    use CpLevelTrait, CpDllTrait;
    use GlobalOptionsTrait;


    /**
     * @return $this
     */
    public function machineKeySet(): self
    {
        $this->setOptions('-machinekeyset');
        return $this;
    }

    /**
     * @return $this
     */
    public function general(): self
    {
        $this->setOptions('-general');
        return $this;
    }

    /**
     * @return $this
     */
    public function critical(): self
    {
        $this->setOptions('-critical');
        return $this;
    }


}