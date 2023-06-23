<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest;

use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\AbsorbOptions\AbsorbParamsOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions\EnumsOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CardOptions\SendOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertKeyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\CertLicOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\DefaultProviderOptions\DefProviderOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\EnumOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\HashOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\CertSearchOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\RegOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\IpSecOptions\SignOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeyCopyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\KeySetOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowEncOptions\EncryptOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\LowSignOption;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\Certificate;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\MiniCaOptions\MiniCaCrlOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\OidOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PasswordOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\PropertyCommandOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions\RcChainOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions\RcIssuerOption;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\RcOptions\RcStoreOption;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfEncOptions\SfEncOptions;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\SfSignOptions;

trait GlobalOptionsTrait
{

    /**
     * @return EnumOptions|GlobalOptionsTrait|AbsorbOptions|AbsorbParamsOptions|CardOptions|EnumsOptions|SendOptions|CertKeyOptions|CertLicOptions|DefaultProviderOptions|DefProviderOptions|Options\EnumOptions\EnumOptions|HashOptions|IpSecOptions|CertSearchOptions|RegOptions|SignOptions|KeyCopyOptions|KeySetOptions|Options\KeySetOptions\KeySetOptions|LowEncOptions|EncryptOptions|LowSignOption|Options\LowSignOptions\SignOptions|MiniCaOptions|Certificate|MiniCaCrlOptions|OidOptions|PasswordOptions|Options\PasswordOptions\PasswordOptions|PropertyOptions|PropertyCommandOptions|RcOptions|RcChainOptions|RcIssuerOption|RcStoreOption|SfEncOptions|SfSignOptions|Options\SfSignOptions\SignOptions
     */
    final public function noTime(): self
    {
        $this->setOptions('-notime');
        return $this;
    }

    /**
     * @return EnumOptions|GlobalOptionsTrait|AbsorbOptions|AbsorbParamsOptions|CardOptions|EnumsOptions|SendOptions|CertKeyOptions|CertLicOptions|DefaultProviderOptions|DefProviderOptions|EnumOptions\EnumOptions|HashOptions|IpSecOptions|CertSearchOptions|RegOptions|SignOptions|KeyCopyOptions|KeySetOptions|KeySetOptions\KeySetOptions|LowEncOptions|EncryptOptions|LowSignOption|Options\LowSignOptions\SignOptions|MiniCaOptions|Certificate|MiniCaCrlOptions|OidOptions|PasswordOptions|PasswordOptions\PasswordOptions|PropertyOptions|PropertyCommandOptions|RcOptions|RcChainOptions|RcIssuerOption|RcStoreOption|SfEncOptions|SfSignOptions|SfSignOptions\SignOptions
     */
    final public function pause(): self
    {
        $this->setOptions('-pause');
        return $this;
    }

    /**
     * @return EnumOptions|GlobalOptionsTrait|AbsorbOptions|AbsorbParamsOptions|CardOptions|EnumsOptions|SendOptions|CertKeyOptions|CertLicOptions|DefaultProviderOptions|DefProviderOptions|EnumOptions\EnumOptions|HashOptions|IpSecOptions|CertSearchOptions|RegOptions|SignOptions|KeyCopyOptions|KeySetOptions|KeySetOptions\KeySetOptions|LowEncOptions|EncryptOptions|LowSignOption|Options\LowSignOptions\SignOptions|MiniCaOptions|Certificate|MiniCaCrlOptions|OidOptions|PasswordOptions|PasswordOptions\PasswordOptions|PropertyOptions|PropertyCommandOptions|RcOptions|RcChainOptions|RcIssuerOption|RcStoreOption|SfEncOptions|SfSignOptions|SfSignOptions\SignOptions
     */
    final public function reboot(): self
    {
        $this->setOptions('-reboot');
        return $this;
    }

    /**
     * @param int|null $mode
     * @return EnumOptions|GlobalOptionsTrait|AbsorbOptions|AbsorbParamsOptions|CardOptions|EnumsOptions|SendOptions|CertKeyOptions|CertLicOptions|DefaultProviderOptions|DefProviderOptions|EnumOptions\EnumOptions|HashOptions|IpSecOptions|CertSearchOptions|RegOptions|SignOptions|KeyCopyOptions|KeySetOptions|KeySetOptions\KeySetOptions|LowEncOptions|EncryptOptions|LowSignOption|Options\LowSignOptions\SignOptions|MiniCaOptions|Certificate|MiniCaCrlOptions|OidOptions|PasswordOptions|PasswordOptions\PasswordOptions|PropertyOptions|PropertyCommandOptions|RcOptions|RcChainOptions|RcIssuerOption|RcStoreOption|SfEncOptions|SfSignOptions|SfSignOptions\SignOptions
     */
    final public function stack(int|null $mode = null): self
    {
        $mode ??= 3;
        if (!in_array($mode, [0, 1, 2, 3])) {
            $mode = 3;
        }
        $this->setOptions('-stack ' . $mode);
        return $this;
    }
}