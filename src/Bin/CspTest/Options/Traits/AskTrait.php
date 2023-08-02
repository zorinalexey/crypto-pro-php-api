<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait AskTrait
{

    /**
     * @return $this
     */
    public function ask(): self
    {
        $this->setOptions('-ask');
       
        return $this;
    }
}