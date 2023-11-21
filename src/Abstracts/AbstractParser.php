<?php

namespace CloudCastle\CryptoProPhpApi\Abstracts;

abstract class AbstractParser
{
    protected const DELIMITER = ' >>> ';

    protected static array $parseData = [
        'Издатель' => 'setIssuer',
        'Субъект' => 'setSubject',
        'Серийный номер' => 'setSerialNumber',
        'SHA1 отпечаток' => 'setSha1',
        'Идентификатор ключа' => 'setKeyId',
        'Алгоритм подписи' => 'setSignAlg',
        'Алгоритм откр. кл.' => 'setOpenKeyAlg',
        'Выдан' => 'setStartDate',
        'Истекает' => 'setEndDate',
        'Ссылка на ключ' => 'setKeyLink',
        'Контейнер' => 'setContainer',
        'Имя провайдера' => 'setProvider',
        'Инфо о провайдере' => 'setProvider',
        'Тип идентификации' => 'setIdentificationType',
        'OCSP URL' => 'setOcspUrl',
        'URL сертификата УЦ' => 'setListCaUrl',
        'URL списка отзыва' => 'setListCrlUrl',
        'Тип провайдера' => 'setProviderType',
        'тип ключа' => 'setKeyType',
        'флаги' => 'setFlags',
    ];

    protected static array $eku = [
        'Назначение/EKU',
    ];
}
