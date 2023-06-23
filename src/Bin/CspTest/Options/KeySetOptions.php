<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions\KeySetOptions as KeySetOpt;

final class KeySetOptions extends Options
{

    use GlobalOptionsTrait;

    /**
     *
     * @return KeySetOpt
     */
    public function newKeySet(): KeySetOpt
    {
        $this->setOptions('-newkeyset');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function addKeyPair(): KeySetOpt
    {
        $this->setOptions('-addkeypair');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function deleteKeySet(): KeySetOpt
    {
        $this->setOptions('-deletekeyset');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function info(): KeySetOpt
    {
        $this->setOptions('-info');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param int|null $mask
     * @return KeySetOpt
     */
    public function check(int|null $mask = null): KeySetOpt
    {
        $this->setOptions('--check ' . $mask);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string|null $alg
     * @return KeySetOpt
     */
    public function hash(string|null $alg = null): KeySetOpt
    {
        $this->setOptions('-hash ' . $alg);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string|null $alg
     * @return KeySetOpt
     */
    public function algId(string|null $alg = null): KeySetOpt
    {
        $this->setOptions('-algid ' . $alg);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string|null $alg
     * @return KeySetOpt
     */
    public function sign(string|null $alg = null): KeySetOpt
    {
        $this->setOptions('-sign ' . $alg);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string|null $alg
     * @return KeySetOpt
     */
    public function verify(string|null $alg = null): KeySetOpt
    {
        $this->setOptions('-verify ' . $alg);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string|null $alg
     * @return KeySetOpt
     */
    public function pkVerify(string|null $alg = null): KeySetOpt
    {
        $this->setOptions('-pkverify ' . $alg);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function enumContainers(): KeySetOpt
    {
        $this->setOptions('-enum_containers');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function crc(): KeySetOpt
    {
        $this->setOptions('-crc');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function encryptionCarrier(): KeySetOpt
    {
        $this->setOptions('-encryptioncarrier');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }


    /**
     * @param string $file
     * @return KeySetOpt
     */
    public function export(string $file): KeySetOpt
    {
        $this->setOptions('-export ' . $file);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string $file
     * @return KeySetOpt
     */
    public function expCert(string $file): KeySetOpt
    {
        $this->setOptions('-expcert ' . $file);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string $file
     * @return KeySetOpt
     */
    public function impCert(string $file): KeySetOpt
    {
        $this->setOptions('-impcert ' . $file);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function makeCert(): KeySetOpt
    {
        $this->setOptions('-makecert');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string $file
     * @return KeySetOpt
     */
    public function fMakeCert(string $file): KeySetOpt
    {
        $this->setOptions('-fmakecert ' . $file);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string $file
     * @return KeySetOpt
     */
    public function loadExt(string $file): KeySetOpt
    {
        $this->setOptions('-loadext ' . $file);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string $file
     * @return KeySetOpt
     */
    public function saveExt(string $file): KeySetOpt
    {
        $this->setOptions('-saveext ' . $file);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * @param string $oid
     * @return KeySetOpt
     */
    public function cleanExt(string $oid): KeySetOpt
    {
        $this->setOptions('-cleanext ' . $oid);
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function noExt(): KeySetOpt
    {
        $this->setOptions('-noext');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOpt
     */
    public function stress(): KeySetOpt
    {
        $this->setOptions('-stress');
        $opt = new KeySetOpt();
        $this->setOptions($opt);
        return $opt;
    }


}