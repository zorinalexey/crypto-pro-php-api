<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\Traits;

trait ReqCompliantTrait
{

    /**
     * @return $this
     */
    final public function reqCompliant(): static
    {
        $this->setOptions('-req_compliant');
        return $this;
    }
}