<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CertMgr;

use CloudCastle\CryptoProPhpApi\Abstracts\Options as AbstractOptions;
use CloudCastle\CryptoProPhpApi\Bin\Bin;

final class CertMgr extends Bin
{
    private static string $bin = self::APP_BIN_PATH . DIRECTORY_SEPARATOR . 'certmgr' . self::APP_EXT;

    public function __construct()
    {
        $this->setCommand(self::$bin);
    }

    /**
     * Вывести сертификаты или CRL из хранилища, файла или контейнера.
     * @return AbstractOptions|Options
     */
    public function list(): AbstractOptions|Options
    {
        $this->setCommand('-list');
        $this->setOptions(new Options());
        return $this->getOptions();
    }

    /**
     * Установить сертификат или CRL в хранилище.
     * Может создать ссылку из сертификата на закрытый ключ, если необходимо.
     * @return AbstractOptions|Options
     */
    public function install(): Options|AbstractOptions
    {
        $this->setCommand('-install');
        $this->setOptions(new Options());
        return $this->getOptions();
    }

    /**
     * Сменить кодировку сертификата или CRL.
     * @return Options
     */
    public function decode(): Options|AbstractOptions
    {
        $this->setCommand('-decode');
        $this->setOptions(new Options());
        return $this->getOptions();
    }

    /**
     * Экспортировать сертификат или CRL из хранилища или контейнера в файл.
     * @return Options
     */
    public function export(): Options|AbstractOptions
    {
        $this->setCommand('-export');
        $this->setOptions(new Options());
        return $this->getOptions();
    }

    /**
     * Удалить сертификат или CRL из хранилища.
     * @return Options
     */
    public function delete(): Options|AbstractOptions
    {
        $this->setCommand('-delete');
        $this->setOptions(new Options());
        return $this->getOptions();
    }

    /**
     * Вывести перечень вложенных логических хранилищ выбранного хранилища сертификатов.
     * @return Options
     */
    public function enumStores(): Options|AbstractOptions
    {
        $this->setCommand('-enumstores');
        $this->setOptions(new Options());
        return $this->getOptions();
    }

}