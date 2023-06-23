<?php

namespace CloudCastle\CryptoProPhpApi\Parser\Traits;

trait HttpTrait
{
    /**
     * @param string $url
     * @return bool
     */
    private function hasHttpUrl(string $url): bool
    {
        if (preg_match('~^(http|https)://(.+)~ui', $url)) {
            return true;
        }
        return false;
    }

}