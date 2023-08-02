<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;

trait StdinTrait
{


    /**
     * Использовать для ввода данных стандартный поток ввода stdin.
     * @return StdinTrait|Options
     */
    final public function stdin(): self
    {
        $this->setOptions('-stdin');

        return $this;
    }
}