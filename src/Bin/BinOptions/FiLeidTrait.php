<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait FiLeidTrait
{

    /**
     * Указать имя файла для записи идентификатора запроса в случае "отложенной выдачи" сертификата
     * @param string $file
     * @return $this
     */
    final public function fiLeid(string $file): self
    {
        $this->setOptions('-fileid "' . $file . '"');
        return $this;
    }
}