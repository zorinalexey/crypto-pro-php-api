<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\CertSearchOptions;

trait NameTrait
{

    final public function name(): CertSearchOptions
    {
        $this->setOptions('-name');
        $opt = new CertSearchOptions();
        $this->setOptions($opt);
       
        return $opt;
    }
}