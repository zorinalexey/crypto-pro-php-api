<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;

trait RdnTrait
{
    /**
     * Список имен полей RDN
     * @param string $fieldName Имя поля
     * @param string $fieldValue Значение поля
     * @return CreateRequestOptions|RdnTrait|CreateCertOptions
     */
    final public function rdn(string $fieldName, string $fieldValue): self
    {
        $option = $fieldName . '="' . $fieldValue . '"';
        $this->setOptions($option, 'rdn', ', ');
       
        return $this;
    }
}