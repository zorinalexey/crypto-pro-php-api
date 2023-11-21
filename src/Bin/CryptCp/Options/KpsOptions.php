<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AllTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DnTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ErrChainTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\IssuerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoChainTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoNetTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoRevTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ThumbprintTrait;

trait KpsOptions
{
    use AllTrait, DnTrait, ErrChainTrait, IssuerTrait, NoChainTrait, NoNetTrait, NoRevTrait, ThumbprintTrait;

    /**
     * Выбрать хранилище для поиска сертификата
     *
     * @param  string|null  $store Тип хранилища:
     *  user - хранилище пользователя (по умолчанию)
     *  во всех других случаях - хранилище машины
     * @return $this
     */
    final public function store(string $store = null): self
    {
        $store = mb_strtolower($store);
        if ($store === 'user') {
            $store = '-u';
        } else {
            $store = '-m';
        }
        $this->setOptions($store);

        return $this;
    }

    /**
     * Использовать сообщение или файл сертификата
     *
     * @param  string  $file Файл сообщения или сертификата
     * @return $this
     */
    final public function certOrMessage(string $file): self
    {
        $this->setOptions("-f '".$file."'");

        return $this;
    }

    /**
     * Задать количество сертификатов для поиска
     *
     * @return $this
     */
    final public function certsCount(int $count = null): self
    {
        $count ??= 1;
        if ($count > 1) {
            $this->setOptions('-q'.$count);
        } else {
            $this->setOptions('-1');
        }

        return $this;
    }
}
