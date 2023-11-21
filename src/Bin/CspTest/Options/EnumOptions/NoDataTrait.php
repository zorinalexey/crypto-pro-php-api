<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions;

trait NoDataTrait
{
    /**
     * @return EnumOptions|NoDataTrait
     */
    final public function noData(): self
    {
        $this->setOptions('-nodata');

        return $this;
    }
}
