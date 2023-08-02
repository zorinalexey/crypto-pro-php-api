<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\RegOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\SignOptions;

/**
 *
 */
final class IpSecOptions extends Options
{
    use GlobalOptionsTrait;

    /**
     * @return SignOptions
     */
    public function sign(): SignOptions
    {
        $this->setOptions('-sign');
        $opt = new SignOptions();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * @return SignOptions
     */
    public function verify(): SignOptions
    {
        $this->setOptions('-verify');
        $opt = new SignOptions();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * @return RegOptions
     */
    public function regUserStore(): RegOptions
    {
        $this->setOptions('-reg');
        $opt = new RegOptions();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * @return RegOptions
     */
    public function regLocalStore(): RegOptions
    {
        $this->setOptions('-Reg');
        $opt = new RegOptions();
        $this->setOptions($opt);

        return $opt;
    }
}