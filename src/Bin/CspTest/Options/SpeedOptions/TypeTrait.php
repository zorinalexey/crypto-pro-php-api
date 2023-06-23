<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SpeedOptions;

trait TypeTrait
{

    final public function mode(string $type):self
    {
        $type = mb_strtoupper($type);
        if(!in_array($type, ['ALL', 'MULT', 'CRYPT', 'HASH'])){
            $type = 'ALL';
        }
        $this->setOptions('-type '.$type);
        return $this;
    }
}