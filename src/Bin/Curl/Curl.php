<?php

namespace CloudCastle\CryptoProPhpApi\Bin\Curl;


class Curl extends \CloudCastle\CryptoProPhpApi\Bin\Bin
{
    protected static string $bin = self::APP_BIN_PATH . DIRECTORY_SEPARATOR . 'curl' . self::APP_EXT;
    public function __construct()
    {
        $this->setCommand(self::$bin);
    }

    public function options(): Options
    {
        $opt = new Options();
        $this->setOptions($opt);

        return $opt;
    }
}