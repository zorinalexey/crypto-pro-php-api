<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

trait SignTypeTrait
{

    /**
     * Тип подписи
     * @param string $type
     * attached - создать присоединённые подписи
     * detached - создать отсоединённые подписи в отдельных файлах
     * @return SignTypeTrait|AddSignfOptions|AddSignOptions|DelSignOptions|SignfOptions|SignOptions|VerifyOptions|VSignOptions
     */
    final public function signType(string $type): self
    {
        $type = mb_strtolower($type);
        if ($type !== 'detached') {
            $type = 'attached';
        }
        $this->setOptions('-' . $type);

        return $this;
    }
}