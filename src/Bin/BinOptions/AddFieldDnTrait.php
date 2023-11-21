<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateUserOptions;

trait AddFieldDnTrait
{
    /**
     * Добавить поле в DN регистрируемого пользователя
     *
     * @param  string  $fieldName Идентификатор поля DN
     * @param  string  $fieldValue Значение поля
     * @return AddFieldDnTrait|CreateUserOptions
     */
    final public function addField(string $fieldName, string $fieldValue): self
    {
        $this->setOptions('-field "'.$fieldName.'='.$fieldValue.'"');

        return $this;
    }
}
