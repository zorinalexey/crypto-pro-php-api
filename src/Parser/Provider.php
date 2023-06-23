<?php

namespace CloudCastle\CryptoProPhpApi\Parser;

use CloudCastle\CryptoProPhpApi\Abstracts\AbstractParser;
use CloudCastle\CryptoProPhpApi\CryptoProManager;
use CloudCastle\CryptoProPhpApi\Parser\Traits\ParseTrait;

final class Provider extends AbstractParser
{
    use ParseTrait;

    /**
     * @var CryptoProManager|null
     */
    private static CryptoProManager|null $mgr = null;
    private static self|null $current = null;


    /**
     * Имя провайдера
     * @var string|null
     */
    public string|null $name = null;

    /**
     * Тип провайдера
     * @var int|null
     */
    public int|null $type = null;

    /**
     * Тип ключа
     * @var int|null
     */
    public int|null $keyType = null;

    /**
     * Флаги
     * @var string|null
     */
    public string|null $flags = null;

    /**
     * @var array|null
     */
    public array|null $providersByType = null;

    public function __construct(CryptoProManager $mgr)
    {
        self::$mgr = $mgr;
        self::$current = $this;
    }

    public function setInfo(string $providerInfo): void
    {
        if (preg_match('~^Crypto-Pro(.+)~ui', $providerInfo)) {
            $this->name = $providerInfo;
        } else {
            $this->parse(explode(', ', $providerInfo));
        }
        var_dump($this);
    }


    private function setProviderType(string|int $type): void
    {
        $this->type = (int)$type;
        self::getProviderInfoByType($this->type);
    }

    /**
     * @param int $type
     * @return array|null
     */
    public static function getProviderInfoByType(int $type): array|null
    {
        if (!self::$current) {
            self::$current = new self(new CryptoProManager());
        }
        self::$mgr->cpConfig()->defProv()->view()->provtype($type);
        $data = self::$mgr->exec();
        if (!$data['code']) {
            foreach ($data['output'] as $item) {
                if (preg_match('~(\s+)(?<provider_type>\d+)(\s+)(?<provider_name>(.+))~iu', $item, $matches)) {
                    self::$current->providersByType[] = $matches['provider_name'];
                }
            }
        }
        return self::$current->providersByType;
    }

    private function setKeyType(string|int $type): void
    {
        $this->keyType = (int)$type;
    }

    private function setFlags(string $flags): void
    {
        $this->flags = $flags;
    }

}