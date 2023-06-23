<?php

namespace CloudCastle\CryptoProPhpApi\Bin\BinOptions;

trait LocationTrait
{
    /**
     * Тип хранилища сертификатов для просмотра вложенных хранилищ.
     * Доступны следующие значения опции:
     * user — показать хранилища Текущего пользователя (по умолчанию).
     * machine — показать хранилища Локального компьютера.
     * all_locations — показать все хранилища.
     * @param string $type
     * @return $this
     */
    final public function location(string $type): self
    {
        $types = [
            'user',
            'machine',
            'all_locations',
        ];
        if (!in_array(mb_strtolower($type), $types)) {
            $type = 'user';
        }
        $this->setOptions('-location ' . $type);
        return $this;
    }
}