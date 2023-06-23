<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CryptCp\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AddChainTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AttrTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\AuthAttrTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesBesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadesTsaTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CadestTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\CrlTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\DerTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\FextTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\HashAlgTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\KeepBadFilesTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\NoStampCertTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\PinTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\SignTypeTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StampChainCheckTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\StrictTrait;
use CloudCastle\CryptoProPhpApi\Bin\BinOptions\XLongType1Trait;

final class SignOptions extends Options
{
    use KpsOptions, CertTrait, AddChainTrait, CrlTrait, DerTrait, StrictTrait, AuthAttrTrait, AttrTrait;
    use NoStampCertTrait, StampChainCheckTrait, XLongType1Trait, CadestTrait, CadesBesTrait, CadesTsaTrait, HashAlgTrait;
    use PinTrait, SignTypeTrait, KeepBadFilesTrait, FextTrait;

    /**
     * Указать файл, который будет содержать созданное сообщение
     * @param string $outputFile Файл, который будет содержать созданное сообщение
     * @return void
     */
    final public function file(string $outputFile): void
    {
        $this->setOptions("'" . $outputFile . '"');
    }

}