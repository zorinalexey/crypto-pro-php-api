<?php

namespace CloudCastle\CryptoProPhpApi\Parser\Traits;

trait ParseTrait
{

    private function parse(array $certInfo)
    {
        foreach ($certInfo as $str) {
            preg_match('~^(?<method_name>[/\w\s.]+)(:)?(?<value>.+)$~u', $str, $matches);
            if (
                isset($matches['method_name'], self::$parseData[trim($matches['method_name'])]) &&
                ($methodName = trim($matches['method_name'])) &&
                method_exists($this, self::$parseData[$methodName])
            ) {
                $method = self::$parseData[$methodName];
                $this->$method(trim($matches['value']));
            }
        }
    }

}