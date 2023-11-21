<?php

namespace CloudCastle\CryptoProPhpApi\Abstracts;

abstract class Bin
{
    /**
     * Архитектура ОС
     */
    protected const ARCH = 'amd64';

    /**
     * Путь к корневому каталогу файлов установки Крипто-Про
     */
    protected const APP_ROOT_PATH = '/opt/cprocsp';

    /**
     * Каталог файлов утилит bin
     */
    public const APP_BIN_PATH = self::APP_ROOT_PATH.DIRECTORY_SEPARATOR.'bin'.DIRECTORY_SEPARATOR.self::ARCH;

    /**
     * Каталог файлов утилит sbin
     */
    public const APP_SBIN_PATH = self::APP_ROOT_PATH.DIRECTORY_SEPARATOR.'sbin'.DIRECTORY_SEPARATOR.self::ARCH;

    /**
     * Расширение файлов утилит
     * В ОС семейства Windows указать .exe
     * В *Unix подобных ОС расширение отсутствует
     */
    public const APP_EXT = '';

    /**
     * Каталог файлов сертификатов и баз Крипто-Про
     */
    public const APP_BASE_PATH = '/var/opt/cprocsp';
}
