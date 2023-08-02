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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @return PasswordOpt
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
     * @param string $alg
     * @return PasswordOpt
     */
    public function algId(string $alg): PasswordOpt
    {
        $this->setOptions('-algid ' . $alg);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Изменить пароль для контейнера на PIN-код или использовать его в качестве пароля для контейнера
     * ENC в параметре -cchange, если он установлен.
     * @param string $pin
     * @return PasswordOpt
     */
    public function change(string $pin): PasswordOpt
    {
        $this->setOptions('-change ' . $pin);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Окно смены пароля на контейнере
     * @return PasswordOpt
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
     * @param string $pin
     * @return PasswordOpt
     */
    public function cChange(string $pin): PasswordOpt
    {
        $this->setOptions('-cchange ' . $pin);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Изменить пароль для разделения truct K
     * @param string $truct
     * @return PasswordOpt
     */
    public function kChange(string $truct): PasswordOpt
    {
        $this->setOptions('-kchange ' . $truct);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Изменить пароль для разделения truct N
     * @param string $truct
     * @return PasswordOpt
     */
    public function nChange(string $truct): PasswordOpt
    {
        $this->setOptions('-nchange ' . $truct);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Установить номера копий контейнера в новой схеме noname NK: A - номер для первой части, B - для второй и т.д.
     * @param string $counts
     * @return PasswordOpt
     */
    public function nkDupCounts(string $counts): PasswordOpt
    {
        $this->setOptions('-nk_dupcounts ' . $counts);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }

    /**
     * Установить контейнер шифрования ENC
     * @param string $enc
     * @return PasswordOpt
     */
    public function eContainer(string $enc): PasswordOpt
    {
        $this->setOptions('-econtainer ' . $enc);
        $opt = new PasswordOpt();
        $this->setOptions($opt);

        return $opt;
    }
}