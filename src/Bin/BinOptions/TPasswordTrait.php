<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;

trait TPasswordTrait
{
    /**
     * Задать пароль к маркеру временного доступа
     * @param string $password Пароль к маркеру временного доступа
     * @return TPasswordTrait|CheckRegOptions|CreateCertOptions|ListTmplOptions|PendCertOptions
     */
    final public function password(string $password): self
    {
        $this->setOptions('-tpassword ' . $password);

        return $this;
    }
}