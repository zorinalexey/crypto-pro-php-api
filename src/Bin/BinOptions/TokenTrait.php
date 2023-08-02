<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait TokenTrait
{
    /**
     * Задать маркер временного доступа для проверки статуса
     * @param string $token
     * @return CheckRegOptions|TokenTrait|CreateCertOptions|ListTmplOptions|PendCertOptions
     */
    final public function token(string $token): self
    {
        $this->setOptions('-token ' . $token);

        return $this;
    }
}