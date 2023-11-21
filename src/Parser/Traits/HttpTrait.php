<?php

namespace CloudCastle\CryptoProPhpApi\Parser\Traits;

trait HttpTrait
{
    private function hasHttpUrl(string $url): bool
    {
        if (preg_match('~^(http|https)://(.+)~ui', $url)) {
            return true;
        }

        return false;
    }
}
