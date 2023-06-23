<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait AddFieldDnTrait
{

    /**
     * Добавить поле в DN регистрируемого пользователя
     * @param string $fieldName Идентификатор поля DN
     * @param string $fieldValue Значение поля
     * @return $this
     */
    final public function addField(string $fieldName, string $fieldValue): self
    {
        $this->setOptions('-field "' . $fieldName . '=' . $fieldValue . '"');
        return $this;
    }
}