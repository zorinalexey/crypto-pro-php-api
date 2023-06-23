<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait IssuerTrait
{

    /**
     * Критерии поиска для сертификата.
     * Если более одного сертификата удовлетворяют заданным критериям,
     * пользователю будет предложено выбрать один из найденных.
     * @param string $searchString
     * @return $this
     */
    final public function issuer(string $searchString): self
    {
        $this->setOptions("-issuer '" . $searchString . "'");
        return $this;
    }
}