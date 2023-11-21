<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp;

use CloudCastle\CryptoProPhpApi\Bin\Bin;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CheckRegOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddAttrOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\AddSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CopyCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateRequestOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CreateUserOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\CspCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DecryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\DelSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\InstCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListDnOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\ListTmplOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\PendCertOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VerifyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options\VSignOptions;

final class CryptCp extends Bin
{
    private static string $bin = self::APP_BIN_PATH.DIRECTORY_SEPARATOR.'cryptcp'.self::APP_EXT;

    public function __construct()
    {
        $this->setCommand(self::$bin);
    }

    /**
     * Зашифровать данные и создать сообщение
     */
    public function encrypt(): EncryptOptions
    {
        $opt = new EncryptOptions();
        $this->setCommand('-encr');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Расшифровать данные из сообщения
     */
    public function decrypt(): DecryptOptions
    {
        $opt = new DecryptOptions();
        $this->setCommand('-decr');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Произвести хеширование содержимого файлов и записать результат в «имя_исходного_файла.hsh»
     */
    public function hash(): HashOptions
    {
        $opt = new HashOptions();
        $this->setCommand('-hash');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Проверить значение хэша файла
     */
    public function vHash(): HashOptions
    {
        $opt = new HashOptions();
        $this->setCommand('-vhash');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Создание подписи для файла
     */
    public function signF(): SignfOptions
    {
        $opt = new SignfOptions();
        $this->setCommand('-signf');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Проверка подписи файла
     */
    public function vSignF(): VSignOptions
    {
        $opt = new VSignOptions();
        $this->setCommand('-vsignf');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Добавление подписи в файл
     */
    public function addSignF(): AddSignfOptions
    {
        $opt = new AddSignfOptions();
        $this->setCommand('-addsignf');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Создание подписанного сообщения
     */
    public function sign(): SignOptions
    {
        $opt = new SignOptions();
        $this->setCommand('-sign');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Добавление подписи в сообщение
     */
    public function addSign(): AddSignOptions
    {
        $opt = new AddSignOptions();
        $this->setCommand('-addsign');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Удаление подписи из сообщения
     */
    public function delSign(): DelSignOptions
    {
        $opt = new DelSignOptions();
        $this->setCommand('-delsign');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Проверка подписи
     */
    public function verify(): VerifyOptions
    {
        $opt = new VerifyOptions();
        $this->setCommand('-verify');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Проверка подписи
     */
    public function addAttr(): AddAttrOptions
    {
        $opt = new AddAttrOptions();
        $this->setCommand('-addattr');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Копирование сертификата в хранилище
     */
    public function copyCert(): CopyCertOptions
    {
        $opt = new CopyCertOptions();
        $this->setCommand('-copycert');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Копирование сертификата из ключевого контейнера в хранилище
     */
    public function cspCert(): CspCertOptions
    {
        $opt = new CspCertOptions();
        $this->setCommand('-cspcert');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Удаление сертификата из хранилища локальной машины
     */
    public function delCert(): DelCertOptions
    {
        $opt = new DelCertOptions();
        $this->setCommand('-delcert');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Создание и сохранение запроса сертификата
     */
    public function createRequest(): CreateRequestOptions
    {
        $opt = new CreateRequestOptions();
        $this->setCommand('-createrqst');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Установка сертификата из файла
     */
    public function instCert(): InstCertOptions
    {
        $opt = new InstCertOptions();
        $this->setCommand('-instcert');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Просмотр настроек учетных записей пользователей УЦ
     */
    public function listDn(): ListDnOptions
    {
        $opt = new ListDnOptions();
        $this->setCommand('-listdn');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Регистрация пользователя на УЦ
     */
    public function createUser(): CreateUserOptions
    {
        $opt = new CreateUserOptions();
        $this->setCommand('-createuser');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Проверка регистрации пользователя на УЦ
     */
    public function checkReg(): CheckRegOptions
    {
        $opt = new CheckRegOptions();
        $this->setCommand('-checkreg');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Просмотр списка шаблонов сертификатов, доступных пользователю УЦ
     */
    public function listTmpl(): ListTmplOptions
    {
        $opt = new ListTmplOptions();
        $this->setCommand('-listtmpl');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Создание запроса, получение и установка сертификата
     */
    public function createCert(): CreateCertOptions
    {
        $opt = new CreateCertOptions();
        $this->setCommand('-createcert');
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Проверка выпуска сертификата, получение и установка сертификата
     */
    public function pendCert(): PendCertOptions
    {
        $opt = new PendCertOptions();
        $this->setCommand('-pendcert');
        $this->setOptions($opt);

        return $opt;
    }
}
