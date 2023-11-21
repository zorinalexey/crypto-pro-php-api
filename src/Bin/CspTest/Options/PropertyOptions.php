<?php

namespace CloudCastle\CryptoProPhpApi\Bin\CspTest\Options;

use CloudCastle\CryptoProPhpApi\Abstracts\Options;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\GlobalOptionsTrait;
use CloudCastle\CryptoProPhpApi\Bin\CspTest\Options\PropertyOptions\PropertyCommandOptions;

final class PropertyOptions extends Options
{
    use GlobalOptionsTrait;

    public function make(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-make');
        $this->setOptions($opt);

        return $opt;
    }

    public function delete(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-delete');
        $this->setOptions($opt);

        return $opt;
    }

    public function install(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-install');
        $this->setOptions($opt);

        return $opt;
    }

    public function certInstall(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-cinstall');
        $this->setOptions($opt);

        return $opt;
    }

    public function setCert(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-setcert');
        $this->setOptions($opt);

        return $opt;
    }

    public function sign(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-sign');
        $this->setOptions($opt);

        return $opt;
    }

    public function shadowThumbpint(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-shadowthumbpint');
        $this->setOptions($opt);

        return $opt;
    }

    public function linkedThumbprint(): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-linkedthumbprint');
        $this->setOptions($opt);

        return $opt;
    }

    public function pin(string $password): PropertyCommandOptions
    {
        $opt = new PropertyCommandOptions();
        $this->setOptions('-pin '.$password);
        $this->setOptions($opt);

        return $opt;
    }
}
