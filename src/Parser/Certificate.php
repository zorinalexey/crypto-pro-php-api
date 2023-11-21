<?php

namespace CloudCastle\CryptoProPhpApi\Parser;

use CloudCastle\CryptoProPhpApi\Abstracts\AbstractParser;
use CloudCastle\CryptoProPhpApi\CryptoProManager;
use CloudCastle\CryptoProPhpApi\Parser\Traits\DateTrait;
use CloudCastle\CryptoProPhpApi\Parser\Traits\HttpTrait;
use CloudCastle\CryptoProPhpApi\Parser\Traits\ParseTrait;
use DateTime;
use Exception;

final class Certificate extends AbstractParser
{
    use DateTrait, HttpTrait, ParseTrait;

    /**
     * Издатель сертификата
     */
    public ?Issuer $issuer = null;

    /**
     * Владелец сертификата
     */
    public ?Subject $subject = null;

    /**
     * Серийный номер сертификата
     */
    public ?string $serial = null;

    /**
     * SHA1 отпечаток
     */
    public ?string $sha1 = null;

    /**
     * SHA1 отпечаток
     */
    public ?string $thumbprint = null;

    /**
     * Идентификатор ключа
     */
    public ?string $keyId = null;

    /**
     * Алгоритм подписи
     */
    public ?Algorithm $algSign = null;

    /**
     * Алгоритм открытого ключа
     */
    public ?Algorithm $algOpenKey = null;

    /**
     * Дата начала действия сертификата
     */
    public ?DateTime $startDate = null;

    /**
     * Дата окончания действия сертификата
     */
    public ?DateTime $endDate = null;

    /**
     * Ссылка на ключ
     */
    public bool $linkKey = false;

    /**
     * Информация о контейнере
     */
    public ?Container $container = null;

    /**
     * Информация о провайдере
     */
    public ?Provider $provider = null;

    /**
     * Тип идентификации
     */
    public ?string $identificationType = null;

    /**
     * OCSP URL
     */
    public ?string $ocspUrl = null;

    /**
     * URL сертификата УЦ
     */
    public ?array $listCaUrl = null;

    /**
     * URL списка отзыва
     */
    public ?array $listCrlUrl = null;

    /**
     * Назначение/EKU
     */
    public ?array $ekuList = null;

    private ?CryptoProManager $mgr = null;

    public function __construct(array $certInfo, CryptoProManager $mgr)
    {
        $this->mgr = $mgr;
        $this->parse($certInfo);
        $this->setEkuList(implode(self::DELIMITER, $certInfo));
    }

    private function setEkuList(string $certInfo): void
    {
        foreach (self::$eku as $v) {
            if (preg_match('~'.$v.'(\s+):(?<eku>.+)~iu', $certInfo, $matches)) {
                $ekulist = explode(self::DELIMITER, preg_replace('~^([^=]+)(.+)$~u', '$1', $matches['eku']));
                foreach ($ekulist as $item) {
                    if ($val = trim($item)) {
                        $this->ekuList[] = $val;
                    }
                }
            }
        }

    }

    private function setIssuer(string $issuer): void
    {
        $this->issuer = new Issuer($issuer);
    }

    private function setSubject(string $subject): void
    {
        $this->subject = new Subject($subject);
    }

    private function setProvider(string $providerInfo): void
    {
        if (! $this->provider) {
            $this->provider = new Provider($this->mgr);
        }
        $this->provider->setInfo($providerInfo);
    }

    /**
     * @throws Exception
     */
    private function setStartDate(string $date): void
    {
        $this->startDate = $this->getDate($date);
    }

    /**
     * @throws Exception
     */
    private function setEndDate(string $date): void
    {
        $this->endDate = $this->getDate($date);
    }

    private function setContainer(string $container): void
    {
        $this->container = new Container($container, $this->mgr);
    }

    private function setSerialNumber(string $number): void
    {
        $this->serial = $number;
    }

    private function setSha1(string $sha1): void
    {
        $this->sha1 = $sha1;
        $this->thumbprint = $this->sha1;
    }

    private function setKeyId(string $keyId): void
    {
        $this->keyId = $keyId;
    }

    private function setSignAlg(string $alg): void
    {
        $this->algSign = new Algorithm($alg, $this->mgr);
    }

    private function setOpenKeyAlg(string $alg): void
    {
        $this->algOpenKey = new Algorithm($alg, $this->mgr);
    }

    private function setKeyLink(string $value): void
    {
        $data = [
            'есть' => true,
            'yes' => true,
            'no' => false,
            'нет' => false,
        ];
        $value = mb_strtolower($value);
        if (isset($data[$value])) {
            $this->linkKey = $data[$value];
        }
    }

    private function setIdentificationType(string $type): void
    {
        $this->identificationType = $type;
    }

    private function setOcspUrl(string $url): void
    {
        if ($this->hasHttpUrl($url)) {
            $this->ocspUrl = $url;
        }
    }

    private function setListCaUrl(string $url): void
    {
        if ($this->hasHttpUrl($url)) {
            $this->listCaUrl[] = $url;
        }
    }

    private function setListCrlUrl(string $url): void
    {
        if ($this->hasHttpUrl($url)) {
            $this->listCrlUrl[] = $url;
        }
    }
}
