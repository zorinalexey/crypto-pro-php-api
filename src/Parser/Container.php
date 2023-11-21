<?php

namespace CloudCastle\CryptoProPhpApi\Parser;

use CloudCastle\CryptoProPhpApi\CryptoProManager;

final class Container
{
    private CryptoProManager $mgr;

    public function __construct(string $container, CryptoProManager $mgr)
    {
        $this->mgr = $mgr;
    }

    public function viewInfoContainer(string $containerName)
    {
        $this->mgr->cspTest()->keySet();
    }
}
