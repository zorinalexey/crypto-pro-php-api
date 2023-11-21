<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;

trait MmxSseDisableTrait
{
    /**
     * @return PerfOptions|MmxSseDisableTrait
     */
    final public function mmxSseDisable(): self
    {
        $this->setOptions('-mmx-sse-disable');

        return $this;
    }
}
