<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\ProvtypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\DefProv\SetDefOptions;
use CloudCastle\CryptoProPhpApi\Bin\CpConfig\Options\Traits\ViewTrait;

final class DefProvOptions extends Options
{
    use ProvtypeTrait, ViewTrait;

    /**
     * Установка провайдера по умолчанию для нужного типа
     */
    public function setDefault(): SetDefOptions
    {
        $opt = new SetDefOptions();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Получение имени провайдера по умолчанию для нужного типа
     */
    public function getDefault(int $provType): void
    {
        $this->setOptions('-getdef');
        $this->setOptions('-provtype');
        $this->setOptions($provType);
    }

    /**
     * Просмотр типов доступных криптопровайдеров
     */
    public function viewType(): void
    {
        $this->setOptions('-view_type');
    }
}
