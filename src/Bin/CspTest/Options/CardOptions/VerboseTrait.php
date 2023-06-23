<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions;

trait VerboseTrait
{
    final public function verbose(): self
    {
        $this->setOptions('-verbose');
        return $this;
    }


}