<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions\PasswordOptions as PasswordOpt;

final class PasswordOptions extends Options
{
    use GlobalOptionsTrait;

    /**
     * Создать новый набор ключей
     */
    public function newKeySet(): PasswordOpt
    {
        $this->setOptions('-newkeyset');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Установить контейнер по умолчанию
     */
    public function def(): PasswordOpt
    {
        $this->setOptions('-def');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Показать сохраненный пароль
     */
    public function showSaved(): PasswordOpt
    {
        $this->setOptions('-showsaved');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Удалить сохраненный пароль
     */
    public function delSaved(): PasswordOpt
    {
        $this->setOptions('-delsaved');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Удалить ярлыки
     */
    public function delShortcut(): PasswordOpt
    {
        $this->setOptions('-delshortcut');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Распечатать информацию о PIN на контейнере
     */
    public function pinInfo(): PasswordOpt
    {
        $this->setOptions('-pininfo');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Информация для аутентификации
     */
    public function authInfo(): PasswordOpt
    {
        $this->setOptions('-authinfo');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Удалить набор ключей (PP_DELETE_KEYSET)
     */
    public function deleteKeySet(): PasswordOpt
    {
        $this->setOptions('-deletekeyset');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Проверить контейнер (полностью открытый контейнер)
     */
    public function check(): PasswordOpt
    {
        $this->setOptions('-check');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Установить симметричный ключ algid на symalg
     * GR3412_K, GR3412_M, 3DES, 3DES_112, DES, RC2, RC4, AES_128, AES_192, AES_256, GENERIC, GOST_GENERIC, G28147 - default
     */
    public function algId(string $alg): PasswordOpt
    {
        $this->setOptions('-algid '.$alg);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Изменить пароль для контейнера на PIN-код или использовать его в качестве пароля для контейнера
     * ENC в параметре -cchange, если он установлен.
     */
    public function change(string $pin): PasswordOpt
    {
        $this->setOptions('-change '.$pin);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Окно смены пароля на контейнере
     */
    public function qChange(): PasswordOpt
    {
        $this->setOptions('-qchange');
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Изменить пароль к контейнеру шифрования ENC
     */
    public function cChange(string $pin): PasswordOpt
    {
        $this->setOptions('-cchange '.$pin);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Изменить пароль для разделения truct K
     */
    public function kChange(string $truct): PasswordOpt
    {
        $this->setOptions('-kchange '.$truct);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Изменить пароль для разделения truct N
     */
    public function nChange(string $truct): PasswordOpt
    {
        $this->setOptions('-nchange '.$truct);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Установить номера копий контейнера в новой схеме noname NK: A - номер для первой части, B - для второй и т.д.
     */
    public function nkDupCounts(string $counts): PasswordOpt
    {
        $this->setOptions('-nk_dupcounts '.$counts);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Установить контейнер шифрования ENC
     */
    public function eContainer(string $enc): PasswordOpt
    {
        $this->setOptions('-econtainer '.$enc);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }
}
