<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait DnTrait
{

    /**
     * Критерии поиска для сертификата.
     * Если более одного сертификата удовлетворяют заданным критериям,
     * пользователю будет предложено выбрать один из найденных.
     * @param string $dnKey
     * @param string $dnValue
     * @return $this
     */
    final public function dn(string $dnKey, string $dnValue): self
    {
        $searchString = $dnKey . '="' . $dnValue . '"';
        $this->setOptions($searchString, '-dn', ', ');
        return $this;
    }
}