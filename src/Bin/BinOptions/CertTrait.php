<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;

trait CertTrait
{

    /**
     * Добавить в сообщения сертификат отправителя
     * @param string|null $add
     * cert|null - добавить в сообщения сертификат отправителя
     * Не добавлять сертификат в сообщения во всех остальных случаях
     * @return SignOptions|CertTrait|AddSignfOptions|AddSignOptions|SignfOptions|EncryptOptions
     */
    final public function certAdd(string|null $add = null): self
    {
        $add ??= 'cert';
        $cert = mb_strtolower($add);
        if ($cert !== 'cert') {
            $cert = 'nocert';
        }
        $this->setOptions('-' . $cert);

        return $this;
    }
}