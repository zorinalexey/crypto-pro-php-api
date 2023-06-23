<?php

namespace CloudCastle\CryptoProPhpApi\Parser;

use CloudCastle\CryptoProPhpApi\Abstracts\AbstractParser;
use CloudCastle\CryptoProPhpApi\CryptoProManager;
use CloudCastle\CryptoProPhpApi\Parser\Traits\DateTrait;
use CloudCastle\CryptoProPhpApi\Parser\Traits\HttpTrait;
use CloudCastle\CryptoProPhpApi\Parser\Traits\ParseTrait;
use DateTime;
use Exception;

/**
 *
 */
final class Certificate extends AbstractParser
{
    use DateTrait, ParseTrait, HttpTrait;

    /**
     * Издатель сертификата
     * @var Issuer|null
     */
    public Issuer|null $issuer = null;
    /**
     * Владелец сертификата
     * @var Subject|null
     */
    public Subject|null $subject = null;
    /**
     * Серийный номер сертификата
     * @var string|null
     */
    public string|null $serial = null;
    /**
     * SHA1 отпечаток
     * @var string|null
     */
    public string|null $sha1 = null;
    /**
     * SHA1 отпечаток
     * @var string|null
     */
    public string|null $thumbprint = null;
    /**
     * Идентификатор ключа
     * @var string|null
     */
    public string|null $keyId = null;
    /**
     * Алгоритм подписи
     * @var Algorithm|null
     */
    public Algorithm|null $algSign = null;
    /**
     * Алгоритм открытого ключа
     * @var Algorithm|null
     */
    public Algorithm|null $algOpenKey = null;
    /**
     * Дата начала действия сертификата
     * @var DateTime|null
     */
    public DateTime|null $startDate = null;
    /**
     * Дата окончания действия сертификата
     * @var DateTime|null
     */
    public DateTime|null $endDate = null;
    /**
     * Ссылка на ключ
     * @var bool
     */
    public bool $linkKey = false;
    /**
     * Информация о контейнере
     * @var Container|null
     */
    public Container|null $container = null;
    /**
     * Информация о провайдере
     * @var Provider|null
     */
    public Provider|null $provider = null;
    /**
     * Тип идентификации
     * @var string|null
     */
    public string|null $identificationType = null;
    /**
     * OCSP URL
     * @var string|null
     */
    public string|null $ocspUrl = null;
    /**
     * URL сертификата УЦ
     * @var array|null
     */
    public array|null $listCaUrl = null;
    /**
     * URL списка отзыва
     * @var array|null
     */
    public array|null $listCrlUrl = null;
    /**
     * Назначение/EKU
     * @var array|null
     */
    public array|null $ekuList = null;
    /**
     * @var CryptoProManager|null
     */
    private CryptoProManager|null $mgr = null;

    /**
     * @param array $certInfo
     * @param CryptoProManager $mgr
     */
    public function __construct(array $certInfo, CryptoProManager $mgr)
    {
        $this->mgr = $mgr;
        $this->parse($certInfo);
        $this->setEkuList(implode(self::DELIMITER, $certInfo));
    }

    private function setEkuList(string $certInfo): void
    {
        foreach (self::$eku as $v) {
            if (preg_match('~' . $v . '(\s+):(?<eku>.+)~iu', $certInfo, $matches)) {
                $ekulist = explode(self::DELIMITER, preg_replace('~^([^=]+)(.+)$~u', '$1', $matches['eku']));
                foreach ($ekulist as $item) {
                    if ($val = trim($item)) {
                        $this->ekuList[] = $val;
                    }
                }
            }
        }


    }

    /**
     * @param string $issuer
     * @return void
     */
    private function setIssuer(string $issuer): void
    {
        $this->issuer = new Issuer($issuer);
    }

    /**
     * @param string $subject
     * @return void
     */
    private function setSubject(string $subject): void
    {
        $this->subject = new Subject($subject);
    }

    /**
     * @param string $providerInfo
     * @return void
     */
    private function setProvider(string $providerInfo): void
    {
        if (!$this->provider) {
            $this->provider = new Provider($this->mgr);
        }
        $this->provider->setInfo($providerInfo);
    }

    /**
     * @param string $date
     * @return void
     * @throws Exception
     */
    private function setStartDate(string $date): void
    {
        $this->startDate = $this->getDate($date);
    }

    /**
     * @param string $date
     * @return void
     * @throws Exception
     */
    private function setEndDate(string $date): void
    {
        $this->endDate = $this->getDate($date);
    }

    /**
     * @param string $container
     * @return void
     */
    private function setContainer(string $container): void
    {
        $this->container = new Container($container, $this->mgr);
    }

    /**
     * @param string $number
     * @return void
     */
    private function setSerialNumber(string $number): void
    {
        $this->serial = $number;
    }

    /**
     * @param string $sha1
     * @return void
     */
    private function setSha1(string $sha1): void
    {
        $this->sha1 = $sha1;
        $this->thumbprint = $this->sha1;
    }

    /**
     * @param string $keyId
     * @return void
     */
    private function setKeyId(string $keyId): void
    {
        $this->keyId = $keyId;
    }

    /**
     * @param string $alg
     * @return void
     */
    private function setSignAlg(string $alg): void
    {
        $this->algSign = new Algorithm($alg, $this->mgr);
    }

    /**
     * @param string $alg
     * @return void
     */
    private function setOpenKeyAlg(string $alg): void
    {
        $this->algOpenKey = new Algorithm($alg, $this->mgr);
    }

    /**
     * @param string $value
     * @return void
     */
    private function setKeyLink(string $value): void
    {
        $data = [
            'есть' => true,
            'yes' => true,
            'no' => false,
            'нет' => false
        ];
        $value = mb_strtolower($value);
        if (isset($data[$value])) {
            $this->linkKey = $data[$value];
        }
    }

    /**
     * @param string $type
     * @return void
     */
    private function setIdentificationType(string $type): void
    {
        $this->identificationType = $type;
    }

    /**
     * @param string $url
     * @return void
     */
    private function setOcspUrl(string $url): void
    {
        if ($this->hasHttpUrl($url)) {
            $this->ocspUrl = $url;
        }
    }

    /**
     * @param string $url
     * @return void
     */
    private function setListCaUrl(string $url): void
    {
        if ($this->hasHttpUrl($url)) {
            $this->listCaUrl[] = $url;
        }
    }

    /**
     * @param string $url
     * @return void
     */
    private function setListCrlUrl(string $url): void
    {
        if ($this->hasHttpUrl($url)) {
            $this->listCrlUrl[] = $url;
        }
    }
}