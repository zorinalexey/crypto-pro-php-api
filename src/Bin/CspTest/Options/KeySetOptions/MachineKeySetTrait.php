<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;

trait MachineKeySetTrait
{

    /**
     * @return KeySetOptions|MachineKeySetTrait
     */
    final public function machineKeySet(): self
    {
        $this->setOptions('-machinekeyset');
       
        return $this;
    }
}