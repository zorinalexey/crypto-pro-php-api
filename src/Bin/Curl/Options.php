<?php

namespace CloudCastle\CryptoProPhpApi\Bin\Curl;

class Options extends \CloudCastle\CryptoProPhpApi\Abstracts\Options
{

    public function method(string $method): self
    {
        $this->setOptions('-X ' . mb_strtoupper($method));

        return $this;
    }

    public function cert(string $sha1_cert): self
    {
        $this->setOptions('-E ' . $sha1_cert);

        return $this;
    }

    public function sendFile(string $file): self
    {
        $this->setOptions("--data-binary @'" . $file ."'");

        return $this;
    }

    public function traceAscii(string $file): self
    {
        $this->setOptions("--trace-ascii '" . $file . "'");

        return $this;
    }

    public function headers(array $headers): self
    {
        foreach ($headers as $k => $v) {
            $this->setOptions("-v --header '" . $k . ":" . $v . "'");
        }

        return $this;
    }

    public function outFile(string $file): self
    {
        $this->setOptions("-o '" . $file . "'");

        return $this;
    }

    public function addOption(string $optName, string $optValue): self
    {
        $this->setOptions($optName . " '" . $optValue . "'");

        return $this;
    }

    public function url(string $url):self
    {
        $this->setOptions($url);

        return $this;
    }
}
