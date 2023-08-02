<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait MachineDestTrait
{

    /**
     * @return MachineSrcTrait|KeyCopyOptions
     */
    final public function machineDest(): self
    {
        $this->setOptions('-machinedest');
       
        return $this;
    }
}