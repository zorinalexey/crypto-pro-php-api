<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait VerboseTrait
{

    /**
     * Выводить подробную информацию о сертификате.
     * @return $this
     */
    final public function verbose(): self
    {
        $this->setOptions('-verbose');
        return $this;
    }
}