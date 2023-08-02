<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;

trait ArchivableTrait
{

    final public function achievable(): self
    {
        $this->setOptions('-archivable');

        return $this;
    }
}