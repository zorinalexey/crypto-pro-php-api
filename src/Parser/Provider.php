<?php

namespace CloudCastle\CryptoProPhpApi\Parser;

use CloudCastle\CryptoProPhpApi\Abstracts\AbstractParser;
use CloudCastle\CryptoProPhpApi\CryptoProManager;
use CloudCastle\CryptoProPhpApi\Parser\Traits\ParseTrait;

final class Provider extends AbstractParser
{
    use ParseTrait;

    private static ?CryptoProManager $mgr = null;

    private static ?self $current = null;

    /**
     * Имя провайдера
     */
    public ?string $name = null;

    /**
     * Тип провайдера
     */
    public ?int $type = null;

    /**
     * Тип ключа
     */
    public ?int $keyType = null;

    /**
     * Флаги
     */
    public ?string $flags = null;

    public ?array $providersByType = null;

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
        $this->type = (int) $type;
        self::getProviderInfoByType($this->type);
    }

    public static function getProviderInfoByType(int $type): ?array
    {
        if (! self::$current) {
            self::$current = new self(new CryptoProManager());
        }
        self::$mgr->cpConfig()->defProv()->view()->provtype($type);
        $data = self::$mgr->exec();
        if (! $data['code']) {
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
        $this->keyType = (int) $type;
    }

    private function setFlags(string $flags): void
    {
        $this->flags = $flags;
    }
}
