<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait PubKeyTrait
{
    /**
     * @return ImportTrait|KeySetOptions
     */
    final public function pubKey(string $file): self
    {
        $this->setOptions('-pubkey "'.$file.'"');

        return $this;
    }
}
