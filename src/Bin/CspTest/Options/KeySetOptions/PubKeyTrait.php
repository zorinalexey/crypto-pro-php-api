<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait PubKeyTrait
{
    /**
     * @param string $file
     * @return ImportTrait|KeySetOptions
     */
    final public function pubKey(string $file): self
    {
        $this->setOptions('-pubkey "' . $file . '"');
       
        return $this;
    }
}