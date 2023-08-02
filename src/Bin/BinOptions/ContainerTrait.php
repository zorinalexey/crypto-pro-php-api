<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions;

trait ContainerTrait
{

    /**
     * Указать имя контейнера с сертификатом или закрытым ключом. Имя имеет формат вида \\.\reader\name.
     * Если опция -file не была указана, закрытый ключ и сертификат будут взяты
     * из указанного контейнера. Контейнер может быть указан в виде строки 'skip', в таком случае в
     * сертификате не будет создана ссылка на закрытый ключ.
     * @param string $container
     * @return CspCertOptions|ContainerTrait|EnumOptions|KeySetOptions|OidOptions|PasswordOptions
     */
    final public function container(string $container): self
    {
        $this->setOptions('-container "' . $container . '"');

        return $this;
    }
}