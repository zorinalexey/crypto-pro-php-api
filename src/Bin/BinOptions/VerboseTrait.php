<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CertMgr\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertKeyOptions;

trait VerboseTrait
{

    /**
     * Выводить подробную информацию о сертификате.
     * @return CertKeyOptions|VerboseTrait|Options
     */
    final public function verbose(): self
    {
        $this->setOptions('-verbose');
       
        return $this;
    }
}