<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait CertTrait
{

    /**
     * Добавить в сообщения сертификат отправителя
     * @param string|null $add
     * cert|null - добавить в сообщения сертификат отправителя
     * Не добавлять сертификат в сообщения во всех остальных случаях
     * @return $this
     */
    final public function certAdd(string|null $add = null): self
    {
        $add ??= 'cert';
        $cert = mb_strtolower($add);
        if ($cert !== 'cert') {
            $cert = 'nocert';
        }
        $this->setOptions('-' . $cert);
        return $this;
    }
}