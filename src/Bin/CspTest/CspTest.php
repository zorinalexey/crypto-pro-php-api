<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest;

use CloudCastle\CryptoProPhpApi\Bin\Bin;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertKeyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertLicOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOption;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PerfOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions\SfEncOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SpeedOptions;
use stdClass;

class CspTest extends Bin
{
    protected static string $bin = self::APP_BIN_PATH . DIRECTORY_SEPARATOR . 'csptest' . self::APP_EXT;

    public function __construct()
    {
        $this->setCommand(self::$bin);
    }

    /**
     * Тест низкоуровневого шифрования/дешифрования
     * @return LowEncOptions
     */
    final public function lowEnc(): LowEncOptions
    {
        $opt = new LowEncOptions();
        $this->setCommand('-lowenc');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * Тест шифрования/дешифрования сообщений на упрощенном уровне
     * @return SfEncOptions
     */
    final public function sfEnc(): SfEncOptions
    {
        $opt = new SfEncOptions();
        $this->setCommand('-sfenc');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * Низкоуровневый тест подписи сообщений
     * Вместо этого используйте '-lowsign -repeat NN'!
     * @return LowSignOption
     */
    final public function lowSign(): LowSignOption
    {
        $opt = new LowSignOption();
        $this->setCommand('-lowsign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * Упрощенный тест подписи/проверки сообщений
     * @return SfSignOptions
     */
    final public function sfSign(): SfSignOptions
    {
        $opt = new SfSignOptions();
        $this->setCommand('-sfsign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     * Упрощенный тест подписи/проверки сообщений (устаревшее и не рекомендовано к использованию)
     * @return SfSignOptions
     */
    final public function cmsSfSign(): SfSignOptions
    {
        $opt = new SfSignOptions();
        $this->setCommand('-cmssfsign');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return IpSecOptions
     */
    final public function ipSec(): IpSecOptions
    {
        $opt = new IpSecOptions();
        $this->setCommand('-ipsec');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return DefaultProviderOptions
     */
    final public function defProv(): DefaultProviderOptions
    {
        $opt = new DefaultProviderOptions();
        $this->setCommand('-defprov');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return PropertyOptions
     */
    final public function property(): PropertyOptions
    {
        $opt = new PropertyOptions();
        $this->setCommand('-property');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return HashOptions
     */
    final public function hash(): HashOptions
    {
        $this->setCommand('-hash');
        $opt = new HashOptions();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return CertKeyOptions
     */
    final public function certKey(): CertKeyOptions
    {
        $this->setCommand('-certkey');
        $opt = new CertKeyOptions();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return AbsorbOptions
     */
    final public function absorb(): AbsorbOptions
    {
        $this->setCommand('-absorb');
        $opt = new AbsorbOptions();
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return IpSecOptions
     */
    final public function tlss(): IpSecOptions
    {
        $opt = new stdClass();
        $this->setCommand('-tlss');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return IpSecOptions
     */
    final public function tlsc(): IpSecOptions
    {
        $opt = new stdClass();
        $this->setCommand('-tlsc');
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return CertLicOptions
     */
    final public function certLic(): CertLicOptions
    {
        $this->setCommand('-certlic');
        $opt = new CertLicOptions();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return RcOptions
     */
    final public function rc(): RcOptions
    {
        $this->setCommand('-rc');
        $opt = new RcOptions();
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return MiniCaOptions
     */
    final public function miniCa(): MiniCaOptions
    {
        $this->setCommand('-minica');
        $opt = new MiniCaOptions();
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return OidOptions
     */
    final public function oid(): OidOptions
    {
        $this->setCommand('-oid');
        $opt = new OidOptions();
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return PasswordOptions
     */
    final public function passwd(): PasswordOptions
    {
        $this->setCommand('-passwd');
        $opt = new PasswordOptions();
        $this->setOptions($opt);
        return $opt;
    }


    /**
     *
     * @return KeyCopyOptions
     */
    final public function keyCopy(): KeyCopyOptions
    {
        $this->setCommand('-keycopy');
        $opt = new KeyCopyOptions();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return KeySetOptions
     */
    final public function keySet(): KeySetOptions
    {
        $this->setCommand('-keyset');
        $opt = new KeySetOptions();
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return CardOptions
     */
    final public function card(): CardOptions
    {
        $opt = new CardOptions();
        $this->setCommand('-card');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return EnumOptions
     */
    final public function enum(): EnumOptions
    {
        $opt = new EnumOptions();
        $this->setCommand('-enum');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return PerfOptions
     */
    final public function perf(): PerfOptions
    {
        $opt = new PerfOptions();
        $this->setCommand('-perf');
        $this->setOptions($opt);
        return $opt;
    }

    /**
     *
     * @return SpeedOptions
     */
    final public function speed(): SpeedOptions
    {
        $opt = new SpeedOptions();
        $this->setCommand('-speed');
        $this->setOptions($opt);
        return $opt;
    }
}