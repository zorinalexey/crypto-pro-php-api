<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait RdnTrait
{
    /**
     * Список имен полей RDN
     * @param string $fieldName Имя поля
     * @param string $fieldValue Значение поля
     * @return $this
     */
    final public function rdn(string $fieldName, string $fieldValue): self
    {
        $option = $fieldName . '="' . $fieldValue . '"';
        $this->setOptions($option, 'rdn', ', ');
        return $this;
    }
}