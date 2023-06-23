<?php


namespace CloudCastle\CryptoProPhpApi\Parser\Traits;

use DateTime;
use Exception;

trait DateTrait
{
    /**
     * @throws Exception
     */
    private function getDate(string $date): DateTime
    {
        return new DateTime(date("d.m.Y H:i:s", strtotime(str_replace('/', '.', $date))));
    }
}