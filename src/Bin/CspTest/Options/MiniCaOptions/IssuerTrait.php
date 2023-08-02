<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;

trait IssuerTrait
{

    /**
     * @return IssuerOptions
     */
    final public function issuer(): IssuerOptions
    {
        $opt = new IssuerOptions();
        $this->setOptions($opt);

        return $opt;
    }
}